<?php

namespace App\Livewire\Estate;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreateEstatePage extends Component
{
    use WithFileUploads;
    public $form = [
        "title" => '',
        "description" => '',

        "images" => [],

        "rooms" => [
            0 => [
                'x' => 0,
                'y' => 0
            ]
        ],
        "bathrooms" => [
            0 => [
                'x' => 0,
                'y' => 0
            ]
        ],
        "halls" => [
            0 => [
                'x' => 0,
                'y' => 0
            ]
        ],
        "kitchens" => [
            0 => [
                'x' => 0,
                'y' => 0
            ]
        ],
        "floors" => '',
        "rent" => false,
        "price" => '',
        "type" => '',
    ];

    public $r = 1;
    public $b = 1;
    public $h = 1;
    public $k = 1;

    public function render()
    {
        return view('livewire.estate.create-estate-page');
    }

    public function saveEstate() {
        dd($this->form);
    }

    public function deleteImage($index) {
        array_splice($this->form["images"],$index,1);
    }

    public function addRoom(){
        $this->r++;
    }
    public function addBathroom(){
        $this->b++;
    }
    public function addHall(){
        $this->h++;
    }
    public function addKitchen(){
        $this->k++;
    }
}
