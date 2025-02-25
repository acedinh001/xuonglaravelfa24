<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'  => fake()->name,
            'adress' => fake()->address,
            'avatar' => null,
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'is_active' => rand(0, 1)
        ];
    }
}
