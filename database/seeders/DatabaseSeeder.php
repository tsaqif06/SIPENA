<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'uuid' => Uuid::uuid4()->toString(),
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
        // \App\Models\User::factory()->create([
        //     'nama' => 'Royhan',
        //     'role' => 'user',
        //     'tempatlahir' => 'Bogor',
        //     'tanggallahir' => '1991-01-02',
        //     'alamat' => 'Perumahan Bogor',
        //     'pekerjaan' => 'Codingman',
        //     'notelp' => '0812345678',
        //     'jmlkeluarga' => '4',
        //     'email' => 'royhan@gmail.com',
        //     'password' => bcrypt('royhan'),
        // ]);
        // \App\Models\User::factory()->create([
        //     'nama' => 'Sando',
        //     'role' => 'user',
        //     'tempatlahir' => 'Malang',
        //     'tanggallahir' => '2006-10-01',
        //     'alamat' => 'JL Arjuno',
        //     'pekerjaan' => 'Codingman',
        //     'notelp' => '08983419373',
        //     'jmlkeluarga' => '3',
        //     'email' => 'masandofami@gmail.com',
        //     'password' => bcrypt('sando123'),
        // ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\Ruang::factory(20)->create();

        // \App\Models\Pembayaran::factory()->create([
        //     'rekapbayar_id' => 2,
        //     'totalbayar' => 95000,
        //     'tanggalbayar' => '2023-07-23',
        //     'bulan' => 'jul'
        // ]);
        \App\Models\Lantai::factory()->create([
            'harga' => 75000
        ]);
        \App\Models\Lantai::factory()->create([
            'harga' => 175000
        ]);
        \App\Models\Lantai::factory()->create([
            'harga' => 150000
        ]);
        \App\Models\Lantai::factory()->create([
            'harga' => 125000
        ]);
        \App\Models\Lantai::factory()->create([
            'harga' => 100000
        ]);
        \App\Models\Lantai::factory()->create([
            'harga' => 500000
        ]);
    }
}
