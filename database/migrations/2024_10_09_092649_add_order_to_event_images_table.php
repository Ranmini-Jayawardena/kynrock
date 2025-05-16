<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderToEventImagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('event_images', function (Blueprint $table) {
            //
            $table->tinyInteger('order')->nullable()->after('image_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('event_images', function (Blueprint $table) {
            // Drop the 'order' column
            $table->dropColumn('order');
        });
    }
};
