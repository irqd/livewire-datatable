<?php

namespace App\Livewire;

use App\Models\Role;
use Livewire\Component;
use App\Livewire\Forms\UserForm;

class CreateUser extends Component
{   
    public UserForm $form;
    
    public function submit()
    {   
        $this->form->store();

        $this->dispatch('user-created');
    }

    public function resetForm()
    {
        $this->form->reset();
        $this->form->resetErrorBag();
    }

    public function render()
    {   
        $roles = Role::all();

        $newRoles = [];
        foreach ($roles as $role) {
            $newRoles[] = [
                'value' => $role->id,
                'label' => ucfirst($role->name),
                'selected' => false,
            ];
        }

        return view('livewire.create-user', [
            'roles' => $newRoles,
        ]);
    }
}
