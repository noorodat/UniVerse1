<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('facebook');
            $table->text('github');
            $table->text('linkedin');
            $table->text('instagram');
            $table->integer('courses_number');
            $table->integer('rating');
            $table->bigInteger('earnings');
            $table->boolean('restricted');
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};

