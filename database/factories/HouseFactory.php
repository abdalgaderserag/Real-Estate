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
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            // 'images' => '{}',
            'rent' => $this->faker->word(),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'type' => $this->faker->randomElement(["apartment","house","villa","homestead","building"]),
        ];
    }
}
