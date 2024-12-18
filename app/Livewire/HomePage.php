<?php

namespace App\Livewire;

use App\Models\House;
use Livewire\Attributes\Computed;
use Livewire\Component;

class HomePage extends Component
{

    public $filter=[
        "search" => '',
        "type" => [
            'all' => false
        ],
        'min' => '',
        'max' => '',
        'rent' => false,
        'rooms' => 1,
        'bathrooms' => 1,
        'kitchens' => 1,
        'floors' => 1,
    ];



    #[Computed()]
    public function estates(){
        $estates = House::all();
        $tag = false;
        if($this->filter['type']['all'] != $this->filter['type'][$this->types()[0]])
        {
        $tag = true;
        }
        else{
            for ($i=0; $i < count($this->types()) - 1; $i++) {
                if ($this->filter['type'][$this->types()[$i]] != $this->filter['type'][$this->types()[$i+1]]) {
                    $tag = true;
                }
            }
        }


        if($tag){
            $tags = [];
            foreach ($this->filter['type'] as $t => $val) {
                if($val)
                    array_push($tags,$t);
            }
            $estates = $estates->filter(function(House $e) use ($tags) {
                for ($i=0; $i < count($tags); $i++) {
                    if ($e->type == $tags[$i]) {
                        return true;
                    }
                }
                return false;
            });
        }

        if ($this->filter['min'] != '') {
            $estates = $estates->filter(function(House $e){
                return $e->price >= $this->filter['min'];
            });
        }

        if ($this->filter['max'] != '') {
            $estates = $estates->filter(function(House $e){
                return $e->price <= $this->filter['max'];
            });
        }

        if($this->filter['rent']){
            $estates = $estates->filter(function(House $e){
                if ($this->filter['rent']) {
                    return $e->rent;
                }
                return false;
            });
        }

        $estates = $estates->filter(function(House $e){
            return count($e->detail->rooms) >= $this->filter['rooms'];
        });

        $estates = $estates->filter(function(House $e){
            return count($e->detail->bathrooms) >= $this->filter['bathrooms'];
        });

        $estates = $estates->filter(function(House $e){
            return count($e->detail->kitchen) >= $this->filter['kitchens'];
        });

        $estates = $estates->filter(function(House $e){
            return $e->detail->floors >= $this->filter['floors'];
        });

        return $estates;
    }

    public function mount(){
        foreach($this->types() as $type){
            $this->filter['type'][$type] = false;
        }
    }


    protected function types() {
        return config('estate.type');
    }

    public function render()
    {
        return view('livewire.home-page');
    }

    public function decrease($type){
        if($this->filter[$type] > 1){
            $this->filter[$type]--;
        }
    }

    public function increase($type){
        $this->filter[$type]++;
    }
}
