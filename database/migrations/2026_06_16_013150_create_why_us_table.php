<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('why_us', function (Blueprint $table) {
            $table->string('image');

            $table->string('slide1_title');
            $table->text('slide1_description');

            $table->string('slide2_title');
            $table->text('slide2_description');

            $table->string('slide3_title');
            $table->text('slide3_description');

            $table->string('slide4_title');
            $table->text('slide4_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_us');
    }
};
