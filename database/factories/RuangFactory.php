<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruang>
 */
class RuangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $userId = 1;
        return [
            'user_id' => $userId++,
            'is_dipakai' => mt_rand(0, 1),
            'koderuang' => 'L' . fake()->numberBetween(1, 3) . ' ' . strtoupper(fake()->randomLetter) . fake()->randomNumber(3, true)
        ];
    }
}
