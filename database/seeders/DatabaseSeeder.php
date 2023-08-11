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
            'tanggallahir' => '1991-01-02',
            'alamat' => '-',
            'pekerjaan' => '-',
            'notelp' => '0812345678',
            'jmlkeluarga' => '8',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin123'),
        ]);
        \App\Models\User::factory()->create([
            'nama' => 'Royhan',
            'role' => 'user',
            'tempatlahir' => 'Bogor',
            'tanggallahir' => '1991-01-02',
            'alamat' => 'Perumahan Bogor',
            'pekerjaan' => 'Codingman',
            'notelp' => '0812345678',
            'jmlkeluarga' => '4',
            'email' => 'royhan@gmail.com',
            'password' => bcrypt('royhan'),
        ]);
        \App\Models\User::factory(20)->create();
        \App\Models\Ruang::factory(10)->create();
    }
}
