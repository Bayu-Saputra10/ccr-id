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
        Schema::create('grade_interpretations', function (Blueprint $table) {
            $table->id();
            $table->string('grade')->unique();

    $table->string('category');

    $table->longText('interpretation_id');

    $table->longText('interpretation_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_interpretations');
    }
};
