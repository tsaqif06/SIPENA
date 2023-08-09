<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'nama' => 'Super Admin',
            'role' => 'admin',
            'tempatlahir' => '-',
            'tanggallahir' => '-',
            'alamat' => '-',
            'pekerjaan' => '-',
            'notelp' => '-',
            'jmlkeluarga' => '-',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin123'),
        ]);
        \App\Models\User::factory(10)->create();
    }
}
