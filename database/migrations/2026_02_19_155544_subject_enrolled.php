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
        Schema::create('subject_enrolled', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enrollment_id');
            $table->unsignedBigInteger('subject_schedule_id');
            $table->enum('status', ['enrolled', 'dropped', 'completed']);
            $table->decimal('grade', 3, 1)->nullable();
            $table->timestamps();

            $table->foreign('enrollment_id')->references("id")->on('enrollments')->onDelete('cascade');
            $table->foreign('subject_schedule_id')->references("id")->on('subject_schedule')->onDelete('cascade');

            $table->unique(['enrollment_id', 'subject_schedule_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_enrolled');
    }
};
