<?php

namespace Database\Factories;

use App\Models\Fine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fine>
 */
class FineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    return [
        'loan_id' => null, // se asigna en el seeder
        'amount'  => fake()->randomFloat(2, 5, 50),
        'reason'  => fake()->sentence(),
        'status'  => 'pending',
        'paid_at' => null,
    ];
}


}
