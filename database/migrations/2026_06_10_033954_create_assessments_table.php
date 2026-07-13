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
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();

            $table->string('sector');
            $table->string('company_name');
            $table->string('subsector');
            $table->string('address');
            $table->string('assessment_date');
            $table->string('entry_operator');
            $table->longText('data_source');
            $table->string('notes')->nullable();
            $table->string('logo')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
