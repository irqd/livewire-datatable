<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\Hash;

class EditUser extends Component
{   
    public UserForm $form;
    public $user;
   
    #[On('get-user')] 
    public function handleGetUser($id)
    {
        $this->user = User::find($id);

        $this->form->name = $this->user->name;
        $this->form->email = $this->user->email;
        $this->form->password = $this->user->password;
        $this->form->role = $this->user->role_id;
        $this->form->status = $this->user->status;
    }

    public function submit()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'password' => Hash::make($this->form->password),
            'role_id' => $this->form->role,
            'status' => $this->form->status,
        ]);

        $this->dispatch('user-updated');
    }

    public function resetForm()
    {
        $this->form->reset();
        $this->form->resetErrorBag();
    }

    protected function rules()
    {
        return [
            'form.email' => 'required|email|unique:users,email,'.$this->user->id,
        ];
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

        return view('livewire.edit-user', [
            'roles' => $newRoles,
        ]);
    }
}
