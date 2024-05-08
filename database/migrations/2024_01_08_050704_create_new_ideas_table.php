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
        Schema::create('new_ideas', function (Blueprint $table) {
            $table->id();
            $table->date('ideas_date');
            $table->string('ideas_desc', 100)->nullable();
            $table->string('originator', 50)->nullable();
            $table->string('status', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_ideas');
    }
};
