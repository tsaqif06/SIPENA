<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

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

    private function getUnusedUserId(array &$usedUserIds): ?int
    {
        // Batasi jumlah percobaan agar tidak terjebak dalam loop tak berujung
        $maxAttempts = 10;
        $attempts = 0;

        while ($attempts < $maxAttempts) {
            $userId = mt_rand(2, 10);
            if (!in_array($userId, $usedUserIds)) {
                $usedUserIds[] = $userId;
                return $userId;
            }
            $attempts++;
        }

        // Jika gagal dalam mencari user_id yang belum digunakan, kembalikan null
        return null;
    }
}
