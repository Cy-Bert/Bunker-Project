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
            $table->tinyInteger('health')->default(4);
            $table->tinyInteger('stamina')->default(4);
            $table->tinyInteger('luck')->default(4);
            $table->longText('notes_MJ')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('age');
            $table->integer('size');
            $table->enum('gender', ['homme', 'femme', 'non-binaire']);
            $table->string('body_shape');
            $table->longText('personality');
            $table->enum('type', ['PJ', 'PNJ']);
            $table->string('status')->nullable();
            $table->longText('notes')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('table_id')->default(1);
            $table->string('code_invit')->nullable();
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
