<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory(10)->create();

         \App\Models\Category::factory(10)->create();

         \App\Models\Place::factory(10)->create();

         \App\Models\Menu::factory(10)->create();

         $items = \App\Models\Item::factory(50)->create();

        // Populate the pivot table
        \App\Models\Menu::all()->each(function ($menu) use ($items) {
            $menu->items()->attach(
                $items->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
