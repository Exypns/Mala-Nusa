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
        Schema::create('experience_schedule_days', function (Blueprint $table) {
            $table->id();

            $table->foreignId('experience_schedule_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->unsignedTinyInteger('day_number')->default(1);
            $table->string('title')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_schedule_days');
    }
};
