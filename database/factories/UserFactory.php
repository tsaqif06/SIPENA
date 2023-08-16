<?php

namespace Database\Factories;

use Ramsey\Uuid\Uuid;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        return [
            'uuid' => Uuid::uuid4()->toString(),
            'nama' => $faker->name(),
            'tempatlahir' => $faker->city(),
            'tanggallahir' => $faker->dateTimeBetween('1945-01-01', '2000-12-31')->format('Y-m-d'),
            'alamat' => $faker->address(),
            'pekerjaan' => $faker->jobTitle(),
            'notelp' => $faker->phoneNumber(),
            'jmlkeluarga' => mt_rand(1, 8),
            'email' => $faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
