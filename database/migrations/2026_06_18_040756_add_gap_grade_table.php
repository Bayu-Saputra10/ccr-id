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
            $table->string('next_grade')->nullable();
            $table->decimal('gap_to_next_grade', 8,2)->nullable();
            $table->string('strongest_dimension')->nullable();
            $table->string('weakest_dimension')->nullable();
            $table->text('improvement_priority')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn([
                'next_grade',
                'gap_to_next_grade',
                'strongest_dimension',
                'weakest_dimension',
                'improvement_priority'
            ]);
        });
    }
};
