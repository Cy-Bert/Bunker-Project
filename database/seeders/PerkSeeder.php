<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perks')->insert([
            'name' => "maladroit",
            'desc' => "-5 en adroitesse",
            'type' => "malus",
            'character_id' => 3,
        ]);
        DB::table('perks')->insert([
            'name' => "stylé",
            'desc' => "+5 en style",
            'type' => "bonus",
            'character_id' => 3,
        ]);
        DB::table('perks')->insert([
            'name' => "teubé",
            'desc' => "-12677 en intelligence",
            'type' => "malus",
            'character_id' => 2,
        ]);
        DB::table('perks')->insert([
            'name' => "dev",
            'desc' => "sait faire des sites web",
            'type' => "bonus",
            'character_id' => 1,
        ]);
        DB::table('perks')->insert([
            'name' => "mariée avec jim",
            'desc' => "+5 en gg ta bien fait",
            'type' => "bonus",
            'character_id' => 5,
        ]);
        DB::table('perks')->insert([
            'name' => "secrétaire",
            'desc' => "miskina un peu",
            'type' => "malus",
            'character_id' => 5,
        ]);
    }
}
