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
        Schema::table('wedding_venues', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');      // Should always be Wedding category
            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wedding_venues', function (Blueprint $table) {
            //
            $table->dropColumn('category_id');
            $table->dropColumn('sub_category_id');
        });
    }
};
