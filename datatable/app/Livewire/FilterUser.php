<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class FilterUser extends Component
{   
    public $label;
    public $options;

    #[Modelable]
    public $selectedOption;

    public function render()
    {
        return view('livewire.filter-user');
    }
}
