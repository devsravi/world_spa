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
        Schema::create('country_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->index()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('country_code',5)->index();
            $table->string('language', 50)->index();
            $table->enum('is_Official',['T', 'F'])->default('F');
            $table->decimal('percentage',4,1)->default(0.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_languages');
    }
};
