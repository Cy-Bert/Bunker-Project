<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->longText('desc');
            $table->enum('type', ['bonus', 'malus']);
            $table->foreignId('character_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perks');
    }
};
