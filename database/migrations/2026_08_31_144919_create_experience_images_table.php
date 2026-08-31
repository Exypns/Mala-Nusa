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
        Schema::create('experience_images', function (Blueprint $table) {
            $table->id();

            $table->foreignId('experience_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('image');
            $table->string('alt_text')->nullable();

            $table->boolean('is_cover')->default(false);

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_images');
    }
};
