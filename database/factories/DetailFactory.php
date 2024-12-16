<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Detail;
use App\Models\House;

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
            'rooms' => '{}',
            'bathrooms' => '{}',
            'halls' => '{}',
            'floors' => $this->faker->word(),
            'kitchen' => '{}',
            'house_id' => House::factory(),
        ];
    }
}
