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
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('desc');
            $table->enum('status', ['en création', 'en cours', 'archivée']);
            $table->integer('food')->default(0);
            $table->integer('heat')->default(0);
            $table->integer('heal')->default(0);
            $table->integer('ammo')->default(0);
            $table->longText('notes')->nullable();
            $table->foreignId('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
