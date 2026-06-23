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
    Schema::table('services', function (Blueprint $table) {

        $table->string('service_img1')->nullable();
        $table->string('service_img2')->nullable();
        $table->string('service_img3')->nullable();
        $table->string('service_img4')->nullable();
        $table->string('service_img5')->nullable();
        $table->string('service_img6')->nullable();
        $table->string('test_img1')->nullable();
        $table->string('test_img2')->nullable();
        $table->string('test_img3')->nullable();
        $table->string('test_img4')->nullable();
        $table->string('test_img5')->nullable();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            //
        });
    }
};
