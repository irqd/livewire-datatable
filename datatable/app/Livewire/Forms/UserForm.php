<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Validate;

class UserForm extends Form
{   
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    #[Validate('required')]
    public $role = null;

    #[Validate('required')]
    public $status = true;

    public function store()
    {   
        $this->validate();
        
        // Store the user...
        User::create($this->all());
    }
}
