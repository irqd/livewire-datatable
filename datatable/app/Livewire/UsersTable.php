<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class UsersTable extends Component
{   
    use WithPagination;

    public $search = '';
    public $limit = 10;

    public $sortedColumn = 'created_at';
    public $sortDirection = 'desc';

    public $role = '0';
    public $status = 'all';

    #[On('user-created')]
    public function refreshDataTable()
    {
       $this->render();
    }

    public function sortColumn($column)
    {   
        $this->resetPage();

        if($this->sortedColumn == $column) {
            $this->sortDirection = ($this->sortDirection == 'asc') ? 'desc' : 'asc';
            $this->dispatch('sorted-direction', $this->sortDirection);
            return;
        }
        
        $this->sortedColumn = $column;
        $this->sortDirection = 'asc';

        $this->dispatch('sorted-direction', $this->sortDirection);
    }

    public function toggleStatus(User $user)
    {
        $user->update([
            'status' => !$user->status,
        ]);

        $this->dispatch('dispatch-toast', type: 'success', message: 'User status updated successfully!');
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        $this->dispatch('dispatch-toast', type: 'danger', message: 'User deleted successfully!');
    }

    public function render()
    {   
        $role_options = [
            ['value' => '0', 'label' => 'All'],
            ['value' => '1', 'label' => 'Admin'],
            ['value' => '2', 'label' => 'User'],
            ['value' => '3', 'label' => 'Guest']
        ];

        $status_options = [
            ['value' => 'all', 'label' => 'All'],
            ['value' => 'active', 'label' => 'Active'],
            ['value' => 'inactive', 'label' => 'Inactive'],
        ];

        $query = User::query();

        //$total_users = $query->count();

        return view('livewire.users-table', [
            'users' => $query->search($this->search)
            ->when($this->role != '0', function ($query) {
                $query->where('role_id', $this->role);
            })
            ->when($this->status != 'all', function ($query) {
                $query->where('status', $this->status == 'active' ? 1 : 0);
            })
            ->when($this->sortedColumn, function ($query) {
                $query->orderBy($this->sortedColumn, $this->sortDirection);
            })
            ->paginate($this->limit),
            'role_options' => $role_options,
            'status_options' => $status_options,
            'total_users' => (clone $query)->count(),
            'active_users' => (clone $query)->where('status', 1)->count(),
            'inactive_users' => (clone $query)->where('status', 0)->count(),
        ]);
    }
}
