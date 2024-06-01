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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('code',5)->index();
            $table->string('name');
            $table->enum('continent',['Asia','Europe','North America','Africa','Oceania','Antarctica','South America'])->default('Asia');
            $table->string('region', 26);
            $table->decimal('surface_area', 10, 2)->default(0.00);
            $table->smallInteger('indep_year')->nullable();
            $table->integer('population')->default(0);
            $table->decimal('life_expectancy', 3, 1)->nullable();
            $table->decimal('gnp', 10, 2)->nullable();
            $table->decimal('gnp_old', 10, 2)->nullable();
            $table->string('local_name',50);
            $table->string('government_form', 50)->nullable();
            $table->string('head_Of_state', 65)->nullable();
            $table->integer('capital')->nullable();
            $table->string('code2', 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
