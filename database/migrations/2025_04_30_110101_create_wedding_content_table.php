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
        Schema::create('wedding_content', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->longText('description1');
            $table->string('title2');
            $table->string('image');
            $table->string('wedding_venue_title');
            $table->longText('wedding_venue_description1');
            $table->longText('wedding_venue_description2');
            $table->string('wedding_package_title');
            $table->longText('wedding_package_description');
            $table->string('wedding_package_image');
            $table->string('cultinary_title');
            $table->longText('cultinary_description');
            $table->string('services_title');
            $table->longText('services_description');
            $table->string('services_image');
            $table->string('plan_wedding_title');
            $table->longText('plan_wedding_description');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding_content');
    }
};
