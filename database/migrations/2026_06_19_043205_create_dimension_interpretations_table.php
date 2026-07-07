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
        Schema::create('dimension_interpretations', function (Blueprint $table) {
            $table->id();

            $table->string('key')->unique();
            $table->string('dimension');
            $table->string('dimension_name');
            $table->string('category');
            $table->decimal('score_min',8,4);
            $table->decimal('score_max',8,4);
            $table->longText('automatic_interpretation');
            $table->longText('short_recommendation');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dimension_interpretations');
    }
};
