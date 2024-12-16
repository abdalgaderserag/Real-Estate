<?php

namespace App\Livewire\Estate;

use App\Models\House;
use Livewire\Component;

class ShowEstatePage extends Component
{
    public House $estate;

    public function mount(House $house){
        $this->estate = $house;
    }
    public function render()
    {
        return view('livewire.estate.show-estate-page');
    }
}
