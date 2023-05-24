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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('health');
            $table->tinyInteger('stamina');
            $table->tinyInteger('luck');
            $table->longText('backstory');
            $table->string('avatar');
            $table->integer('age');
            $table->integer('size');
            $table->enum('gender', ['homme', 'femme', 'non-binaire']);
            $table->string('body_shape');
            $table->longText('personality');
            $table->enum('type', ['PJ', 'PNJ']);
            $table->string('status')->nullable();
            $table->longText('notes')->nullable();
            $table->foreignId('table_id');
            $table->string('code_invit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
