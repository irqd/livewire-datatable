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

    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::latest()->simplePaginate(10),
        ]);
    }
}
