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
        Schema::create('aboutus_below_section_content', function (Blueprint $table) {
            $table->id();
            $table->string('location_title');
            $table->longText('location_description');
            $table->string('location_image')->nullable();
            $table->string('booknow_title');
            $table->longText('booknow_description');
            $table->string('booknow_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutus_below_section_content');
    }
};
