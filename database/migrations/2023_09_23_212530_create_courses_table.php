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
            $table->bigInteger('duration');
            $table->bigInteger('price');
            $table->string('status');

            $table->unsignedBigInteger('instructor_id');
            
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

