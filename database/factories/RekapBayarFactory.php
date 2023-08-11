<?php

namespace Database\Factories;
use Faker\Factory as Faker;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekapBayar>
 */
class RekapBayarFactory extends Factory
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
            'nama' => $faker->name(),
            'tempatlahir' => $faker->city(),
            'tanggallahir' => $faker->dateTimeBetween('1945-01-01', '2000-12-31')->format('Y-m-d'),
            'alamat' => $faker->address(),
            'pekerjaan' => $faker->jobTitle(),
            'notelp' => $faker->phoneNumber(),
            'jmlkeluarga' => mt_rand(1, 8),
            'email' => $faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
