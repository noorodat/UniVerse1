<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('image');
            $table->string('preview_video');
            $table->text('description');
            $table->bigInteger('duration');
            $table->integer('number_of_lessons');
            $table->integer('number_of_students');
            $table->bigInteger('price');
            $table->integer('rating');
            $table->string('status');

            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('department_id');
            
            $table->foreign('instructor_id')->references('id')->on('instructors');          
            $table->foreign('department_id')->references('id')->on('departments');        
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

