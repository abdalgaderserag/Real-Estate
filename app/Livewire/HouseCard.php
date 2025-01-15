<?php

namespace App\Livewire;

use App\Models\House;
use Livewire\Component;

class HouseCard extends Component
{
    public House $estate;

    public function mount(House $estate)
    {
        $this->estate = $estate;
    }

    public function render()
    {
        return view('livewire.house-card');
    }
}
