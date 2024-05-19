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
        Schema::create('keywords', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('project_id')->constrained();
            $table->string('keyword');
            $table->string('keyword_spell')->nullable();
            $table->integer('search_volume')->nullable();
            $table->integer('competition_index')->nullable();
            $table->string('competition')->nullable();
            $table->decimal('cpc_high', 8, 2)->nullable();
            $table->decimal('cpc_low', 8, 2)->nullable();
            $table->json('historical')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keywords');
    }
};
