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
        $faker = Faker::create();
        $isDipakai = mt_rand(0, 1);
        $usedUserIds = [];

        return [
            'is_dipakai' => $isDipakai,
            'user_id' => ($isDipakai == 1) ? $this->getUnusedUserId($usedUserIds) : null,
            'koderuang' => 'L' . $faker->numberBetween(1, 3) . ' ' . strtoupper($faker->randomLetter) . $faker->randomNumber(3, true)
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
