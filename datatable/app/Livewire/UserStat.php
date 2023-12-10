<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;

class UserStat extends Component
{   
    public $label;

    #[Reactive] 
    public $value;

    public function render()
    {
        return view('livewire.user-stat');
    }
}
