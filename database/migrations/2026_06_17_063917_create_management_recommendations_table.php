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
        Schema::create('management_recommendations', function (Blueprint $table) {
            $table->id();

            $table->string('key')->unique();
            $table->string('dimension');
            $table->string('dimension_name');
            $table->string('category');
            $table->decimal('score_min', 8,4);
            $table->decimal('score_max', 8,4);
            $table->longText('management_recommendation');
            $table->string('action_focus');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_recommendations');
    }
};
