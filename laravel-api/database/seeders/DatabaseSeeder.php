<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Item::create([
            'name' => 'Barestation Faiv',
            'category' => 'electronic',
            'qty' => 2
        ]);
        Item::create([
            'name' => 'Ekes Bokes',
            'category' => 'electronic',
            'qty' => 12
        ]);
        Item::create([
            'name' => 'Komik',
            'category' => 'medicine',
            'qty' => 34
        ]);
    }
}
