<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Prodi::create(
            [
                'nama' => 'Teknik Informatika'
            ]
        );
        Prodi::create(
            [
                'nama' => 'Manajemen Informatika'
            ]
        );
        Prodi::create(
            [
                'nama' => 'Sistem Informasi'
            ]
        );
    }
}
