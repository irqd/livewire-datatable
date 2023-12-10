<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Modelable;

class LimitUser extends Component
{   
    #[Modelable] 
    public $limit = 10;
    
    public $limiters = [5, 10, 25, 50, 100];

    public function render()
    {
        return view('livewire.limit-user');
    }
}
