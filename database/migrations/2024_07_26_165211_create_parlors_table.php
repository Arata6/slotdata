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
        Schema::create('parlors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('businessHours', 50);
            $table->string('lottery', 50);
            $table->string('adress', 50);
            $table->string('lotteryTime', 50);
            $table->string('machine', 50);
            $table->string('exchange', 50);
            $table->string('recomendation', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parlors');
    }
};
