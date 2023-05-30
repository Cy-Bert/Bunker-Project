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
        $this->call([
            UserSeeder::class,
            TableSeeder::class,
            CharSeeder::class,
            ItemSeeder::class,
            EventSeeder::class,
            LocationSeeder::class,
            PerkSeeder::class,
            RelationSeeder::class,
            UserTableSeeder::class
        ]);
    }
}
