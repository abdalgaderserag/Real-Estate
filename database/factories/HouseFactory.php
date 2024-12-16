<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\House;

class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $images = [
            'images\atom.png',
            'images\ink.png'
        ];
        $rent = $this->faker->boolean();
        $multiply = 1000;
        if (!$rent) {
            $multiply = 1000000;
        }
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'images' => $images,
            'rent' => $rent,
            'price' => $this->faker->numberBetween(2,25) * $multiply,
            'type' => $this->faker->randomElement(["apartment","house","villa","homestead","building"]),
        ];
    }
}
