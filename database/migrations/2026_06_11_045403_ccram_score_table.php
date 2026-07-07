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
        Schema::table('assessments', function (Blueprint $table) {
            $table->decimal('score_a', 8,2)->nullable();
            $table->decimal('score_b', 8,2)->nullable();
            $table->decimal('score_c', 8,2)->nullable();
            $table->decimal('score_d', 8,2)->nullable();
            $table->decimal('score_e', 8,2)->nullable();
            $table->decimal('total_score', 8,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn([
                'score_a',
                'score_b',
                'score_c',
                'score_d',
                'score_e',
                'total_score',
            ]);
        });
    }
};
