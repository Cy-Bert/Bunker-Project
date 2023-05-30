<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            'name' => 'chausson rouillé',
            'desc' => 'un chausson qui est rouillé',
            'stats' => '+450 en swag',
            'character_id' => 2
        ]); 
        DB::table('items')->insert([
            'name' => 'bras de michmich',
            'desc' => 'ouille',
            'stats' => '-5dmg ça a commencé à pourrir',
            'character_id' => 4
        ]); 
        DB::table('items')->insert([
            'name' => 'bouteille de pisse',
            'desc' => 'arme bioterroriste à distance',
            'character_id' => 7
        ]); 
        DB::table('items')->insert([
            'name' => 'figurine my little pony',
            'desc' => 'trop belle omg',
            'stats' => '+1 en bronysme',
            'character_id' => 3
        ]); 
    }
}
