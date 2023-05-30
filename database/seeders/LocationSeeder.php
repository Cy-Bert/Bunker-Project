<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'name' => "chez ta daronne",
            'desc' => "c'est le chaos wallah",
            'image' => "/daronne",
            'table_id' => 2,
        ]);
        DB::table('locations')->insert([
            'name' => "sur la lune",
            'desc' => "c'est à côté de la terre en gros",
            'image' => "/lune",
            'table_id' => 2,
        ]);
        DB::table('locations')->insert([
            'name' => "niort",
            'desc' => "ville jeune et moderne",
            'image' => "/niort",
            'table_id' => 2,
        ]);
        DB::table('locations')->insert([
            'name' => "dans le tiroir gauche de la commode du salon",
            'desc' => "il fait un peu noir",
            'image' => "/tiroir",
            'table_id' => 3,
        ]);
        DB::table('locations')->insert([
            'name' => "l'auberge du poney fringant",
            'desc' => "on y trouve des poneys et des fringues",
            'image' => "/poney",
            'table_id' => 3,
        ]);
    }
}
