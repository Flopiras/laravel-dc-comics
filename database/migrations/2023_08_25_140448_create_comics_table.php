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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->unique();
            $table->text('description')->nullable();
            $table->text('thumb', 300)->nullable();
            $table->string('price', 10)->nullable();
            $table->string('series', 50)->nullable();
            $table->string('sale_date', 50)->nullable();
            $table->string('type', 40)->nullable();
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
