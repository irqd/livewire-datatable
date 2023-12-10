<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Modelable;

class SearchUser extends Component
{   
    #[Modelable] 
    public $search = '';

    public function render()
    {
        return view('livewire.search-user');
    }
}
