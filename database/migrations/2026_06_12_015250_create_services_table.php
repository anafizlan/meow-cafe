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
    Schema::create('services', function (Blueprint $table) {

        $table->id();

        $table->string('section_title');

        $table->string('service1_title');
        $table->text('service1_desc');

        $table->string('service2_title');
        $table->text('service2_desc');

        $table->string('service3_title');
        $table->text('service3_desc');

        $table->string('service4_title');
        $table->text('service4_desc');

        $table->string('service5_title');
        $table->text('service5_desc');

        $table->string('service6_title');
        $table->text('service6_desc');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
