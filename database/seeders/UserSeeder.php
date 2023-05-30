<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'pascal',
            'email' => 'pascal@gmail.com',
            'password' => Hash::make('motdepascal'),
            'profile_photo_path' => '/ici',
            'pseudo' => 'pascal le rascal',
            'role' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'michel',
            'email' => 'michel@gmail.com',
            'password' => Hash::make('motdemichel'),
            'profile_photo_path' => '/la',
            'pseudo' => 'michel la coccinelle',
            'role' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'jean',
            'email' => 'jean@gmail.com',
            'password' => Hash::make('motdejean'),
            'profile_photo_path' => '/pasla',
            'pseudo' => 'jean le gland',
            'role' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'harry',
            'email' => 'harry@gmail.com',
            'password' => Hash::make('motdeharry'),
            'profile_photo_path' => '/enhaut',
            'pseudo' => 'harry le normie',
            'role' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'joelle',
            'email' => 'joelle@gmail.com',
            'password' => Hash::make('motdejoelle'),
            'profile_photo_path' => '/derriere',
            'pseudo' => "joelle la pelle",
            'role' => '1',
        ]);
    }
}
