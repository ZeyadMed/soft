<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'code' => fake()-> uuid(),
            'department_id' => fake()->numberBetween(1,3),
            'password' =>fake()->password(),
            'semester' =>fake()->numberBetween(1,8), 
            'email' =>fake()->unique()->safeEmail()
        ];
    }
}
