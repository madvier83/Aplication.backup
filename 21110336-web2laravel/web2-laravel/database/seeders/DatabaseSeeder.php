<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Guru;


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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Guru::create([
                'nip' => '1234',
                'nama' => 'Budi',
                'mapel' => 'biologi',
                'foto' => 'foto.jpg',
        ]);
        Guru::create([
                'nip' => '1111',
                'nama' => 'Ani',
                'mapel' => 'bahasa indonesia',
                'foto' => 'foto1.jpg',
        ]);
    }
}
