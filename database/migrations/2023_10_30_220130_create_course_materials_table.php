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
        Schema::create('course_materials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('video');
            $table->string('file');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('curriculum_id');

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('curriculum_id')->references('id')->on('course_curricula');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_materials');
    }
};
