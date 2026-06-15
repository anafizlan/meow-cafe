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
    Schema::create('teams', function (Blueprint $table) {
        $table->id();

        $table->string('member1_name');
        $table->string('member1_position');
        $table->string('member1_image');

        $table->string('member2_name');
        $table->string('member2_position');
        $table->string('member2_image');

        $table->string('member3_name');
        $table->string('member3_position');
        $table->string('member3_image');

        $table->string('member4_name');
        $table->string('member4_position');
        $table->string('member4_image');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
