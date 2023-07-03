<?php

namespace Database\Seeders;

use App\Models\Perk;
use Illuminate\Database\Seeder;

class PerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perk::factory(10)->create();
    }
}
