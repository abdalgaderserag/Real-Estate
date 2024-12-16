<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Detail;
use App\Models\House;
use Nette\Utils\Arrays;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'rooms' => $this->getDetails(1,8),
            'bathrooms' => $this->getDetails(1,3),
            'halls' => $this->getDetails(0,3),
            'floors' => $this->faker->numberBetween(0,8),
            'kitchen' => $this->getDetails(1,2),
            'house_id' => House::factory(),
        ];
    }

    private function getDetails($min, $max){
        $temp = [];
        for ($i=0; $i < $this->faker->numberBetween($min, $max); $i++) {
            array_push($temp,[
                "x" => $this->faker->numberBetween(3,8),
                "y" => $this->faker->numberBetween(3,8),
            ]);
        }
        return $temp;
    }
}
