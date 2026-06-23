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
    Schema::create('service_details', function (Blueprint $table) {

        $table->id();

        $table->string('slug');

        $table->string('title');
        $table->text('short_desc');

        $table->string('image');

        $table->string('about_title');
        $table->text('about_desc');

        $table->text('features');

        $table->text('pricing');

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_details');
    }
};
