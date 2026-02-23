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
        Schema::create('subject_schedule', function (Blueprint $table) {
            $table->id();
            $table->string('subject_code');
            $table->string('section');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('term_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->unsignedBigInteger('teacher_id');
            $table->timestamps();

            $table->foreign('subject_code')->references("subject_code")->on('subjects')->onDelete('cascade');
            $table->foreign('teacher_id')->references("id")->on('teachers')->onDelete('cascade');
            $table->foreign('room_id')->references("id")->on('rooms')->onDelete('cascade');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade');

            $table->unique(['subject_code', 'section', 'term_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_schedule');
    }
};
