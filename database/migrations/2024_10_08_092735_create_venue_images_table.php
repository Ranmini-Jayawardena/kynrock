<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenueImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
        Schema::create('venue_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venue_id');
            $table->foreign('venue_id')->references('id')->on('venue_images')->onDelete('cascade');
            $table->string('image_name');
            $table->tinyInteger('order');
            $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venue_images');
        Schema::table('venue_images', function (Blueprint $table) {
            //
            $table->dropForeign('venue_id');
            $table->dropColumn('venue_id');
        });
    }
}
