<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'name' => 'flashmob',
            'desc' => "tout le monde danse pète sa mère",
            'table_id' => 2,
        ]);
        DB::table('events')->insert([
            'name' => 'bière pong',
            'desc' => "tu connais les règles j'vais pas te réexpliquer",
            'table_id' => 2,
        ]);
        DB::table('events')->insert([
            'name' => 'execution de louis croix vé baton',
            'desc' => "c'est quand le boug il s'est fait cut la tronche miskine",
            'table_id' => 2,
        ]);
        DB::table('events')->insert([
            'name' => 'bingo du village',
            'desc' => "y'a un mixeur plic plouc 2000 à gagner",
            'table_id' => 3,
        ]);
        DB::table('events')->insert([
            'name' => 'concours de pets',
            'desc' => "c'est clem qui a gagné. encore.",
            'table_id' => 3,
        ]);
        DB::table('events')->insert([
            'name' => "pluie de steroides",
            'desc' => "y'a pleins de steroides qui tombent du ciel AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAh",
            'table_id' => 3,
        ]);
    }
}
