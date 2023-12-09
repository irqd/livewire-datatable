<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class UsersTable extends Component
{   
    use WithPagination;

    #[On('user-created')]
    public function refreshDataTable()
    {
       $this->render();
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
        return view('livewire.users-table', [
            'users' => User::latest()->simplePaginate(10),
        ]);
    }
}
