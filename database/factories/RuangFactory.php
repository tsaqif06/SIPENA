<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class RuangFactory extends Factory
{
    private static $usedUserIds = [];

    public function definition(): array
    {
        $faker = Faker::create();
        $isDipakai = mt_rand(0, 1);

        return [
            'is_dipakai' => $isDipakai,
            'user_id' => ($isDipakai == 1) ? $this->getUnusedUserId() : null,
            'koderuang' => 'L' . $faker->numberBetween(1, 6) . ' ' . strtoupper($faker->randomLetter) . $faker->randomNumber(3, true)
        ];
    }

    private function getUnusedUserId(): ?int
    {
        $maxAttempts = 10;
        $attempts = 0;

        while ($attempts < $maxAttempts) {
            $userId = mt_rand(2, 10);
            if (!in_array($userId, self::$usedUserIds)) {
                self::$usedUserIds[] = $userId;
                return $userId;
            }
            $attempts++;
        }

        // Jika gagal dalam mencari user_id yang belum digunakan, kembalikan null
        return null;
    }
}
