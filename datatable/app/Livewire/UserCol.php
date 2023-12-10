<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class UserCol extends Component
{   
    public $sortedColumn = 'created_at';
    public $sortDirection = 'desc';

    #[On('sorted-direction')]
    public function updateSortDirection($direction)
    {
        $this->sortDirection = $direction;
    }

    public function render()
    {
        return view('livewire.user-col');
    }
}
