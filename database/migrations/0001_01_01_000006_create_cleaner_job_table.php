<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cleaner_job', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('cleaning_jobs')->cascadeOnDelete();
            $table->foreignId('cleaner_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cleaner_job');
    }
};
