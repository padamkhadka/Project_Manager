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
        Schema::create('software_survey', function (Blueprint $table) {
            $table->id();
            $table->string('software');
            $table->integer('total_user');
            $table->decimal('rating', 4, 2); // Assuming a rating with two decimal places
            $table->string('developr_from');
            $table->string('software_demo_url')->nullable();
            $table->string('demo_username')->nullable();
            $table->string('demo_passport')->nullable();
            $table->string('youtube_channel_url')->nullable();
            $table->string('playstore_app_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_survey');
    }
};
