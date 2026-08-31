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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            $table->text('short-description');
            $table->longText('description');

            $table->string('duration');
            $table->unsignedBigInteger('price');
            $table->unsignedSmallInteger('min_guests')->nullable();
            $table->unsignedSmallInteger('max_guests')->nullable();

            $table->boolean('published')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('is_most_booked')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
