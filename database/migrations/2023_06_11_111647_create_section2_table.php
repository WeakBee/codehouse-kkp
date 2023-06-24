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
        Schema::create('section2', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('title');
            $table->text('subtitle');
            $table->text('card1title');
            $table->text('card1text');
            $table->text('card2title');
            $table->text('card2text');
            $table->text('card3title');
            $table->text('card3text');
            $table->text('card4title');
            $table->text('card4text');
            $table->text('card5title');
            $table->text('card5text');
            $table->text('card6title');
            $table->text('card6text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section2');
    }
};
