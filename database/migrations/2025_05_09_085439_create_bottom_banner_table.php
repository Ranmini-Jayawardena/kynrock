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
        Schema::create('bottom_banner', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('heading')->nullable();
            $table->string('banner_image');
            $table->tinyInteger('order');
            $table->char('status',1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bottom_banner');
    }
};
