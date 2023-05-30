<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tables')->insert([
            'name' => 'la table a ture',
            'desc' => 'la table qui donne le LA',
            'status' => 'en création',
            'food' => 8,
            'heat' => 4,
            'heal' => 5,
            'ammo' => 18,
            'notes' => 'LA LA LA LAAA LA LA, LAAAAAAAAAAAAAAAAA',
            'user_id' => 2
        ]);
        DB::table('tables')->insert([
            'name' => 'A TAAAAAAAAAAAAAAAAAAAAAAAABLE',
            'desc' => 'attend maman je joue en ligne je peux pas mettre pause :(',
            'status' => 'en cours',
            'food' => 52,
            'heat' => 44,
            'heal' => 12,
            'ammo' => 29,
            'notes' => "y'a des raviolis au boeuf de lidl et des flamenkuches",
            'user_id' => 2
        ]);
        DB::table('tables')->insert([
            'name' => 'alt table',
            'desc' => 'ctrl alt soupe',
            'status' => 'archivée',
            'food' => 69,
            'heat' => 69,
            'heal' => 69,
            'ammo' => 69,
            'notes' => "les raccourcis c'est la vie youpi",
            'user_id' => 5
        ]);
        
    }
}
