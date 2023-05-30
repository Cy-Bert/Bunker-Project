<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'character_id' => 4,
            'to_character_id' => 2,
            'relation' => 50,
        ]);
        DB::table('relations')->insert([
            'character_id' => 4,
            'to_character_id' => 5,
            'relation' => 72,
        ]);
        DB::table('relations')->insert([
            'character_id' => 4,
            'to_character_id' => 8,
            'relation' => 23,
        ]);
        DB::table('relations')->insert([
            'character_id' => 3,
            'to_character_id' => 6,
            'relation' => 74,
        ]);
        DB::table('relations')->insert([
            'character_id' => 6,
            'to_character_id' => 3,
            'relation' => 48,
        ]);
        DB::table('relations')->insert([
            'character_id' => 6,
            'to_character_id' => 7,
            'relation' => 67,
        ]);
        DB::table('relations')->insert([
            'character_id' => 3,
            'to_character_id' => 7,
            'relation' => 2,
        ]);
    }
}
