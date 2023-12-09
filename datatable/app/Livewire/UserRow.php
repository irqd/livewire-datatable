<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class UserRow extends Component
{   
    public $user;

    #[On('user-updated')]
    public function refreshUser()
    {
       $this->render();
    }

    public function render()
    {
        return view('livewire.user-row');
    }
}
