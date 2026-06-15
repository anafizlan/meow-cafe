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
    Schema::create('portfolios', function (Blueprint $table) {
    $table->id();

    $table->string('title')->nullable();

    $table->string('cat_category')->nullable();
    $table->string('moment_category')->nullable();
    $table->string('adoption_category')->nullable();
    $table->string('cafe_category')->nullable();

    $table->string('banner_image')->nullable();

    $table->string('cat1_image')->nullable();
    $table->string('moment1_image')->nullable();
    $table->string('branding1_image')->nullable();
    $table->string('book1_image')->nullable();

    $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
