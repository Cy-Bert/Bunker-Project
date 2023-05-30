<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_tables_join')->insert([
            'user_id' => 1,
            'table_id' => 2
        ]);
        DB::table('users_tables_join')->insert([
            'user_id' => 2,
            'table_id' => 3
        ]);
        DB::table('users_tables_join')->insert([
            'user_id' => 3,
            'table_id' => 3
        ]);
        DB::table('users_tables_join')->insert([
            'user_id' => 4,
            'table_id' => 2
        ]);
        DB::table('users_tables_join')->insert([
            'user_id' => 4,
            'table_id' => 3
        ]);
    }
}
