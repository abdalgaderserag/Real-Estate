<?php

namespace App\Livewire;

use App\Models\House;
use Livewire\Component;

class HomePage extends Component
{

    public $search;

    public $estates;


    public function mount(){
        $this->estates = House::all();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
