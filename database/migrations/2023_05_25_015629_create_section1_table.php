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
        Schema::create('section1', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('text1');
            $table->text('text2');
            $table->text('text3');
            $table->text('buttontext');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section1');
    }
};
