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
        Schema::create('school_survey', function (Blueprint $table) {
            $table->id();
            $table->string('school');
            $table->integer('student');
            $table->boolean('transport');
            $table->boolean('hostel');
            $table->string('class');
            $table->boolean('wifi');
            $table->date('estd');
            $table->string('contact');
            $table->string('principal_sir');
            $table->string('software');
            $table->date('software_use_date');
            $table->string('disc_software_record');
            $table->integer('software_rating');
            $table->string('province');
            $table->string('district');
            $table->string('city');
            $table->string('location');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_survey');
    }
};
