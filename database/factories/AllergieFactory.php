<?php

namespace Database\Factories;

use App\Models\Allergie;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllergieFactory extends Factory
{
    protected $model = Allergie::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }
}
