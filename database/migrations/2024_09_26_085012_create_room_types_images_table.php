<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
        Schema::create('roomtypes_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roomtypes_id');
            $table->foreign('roomtypes_id')->references('id')->on('room_types')->onDelete('cascade');
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
        Schema::dropIfExists('roomtypes_images');
        Schema::table('roomtypes_images', function (Blueprint $table) {
            //
            $table->dropForeign('roomtypes_id');
            $table->dropColumn('roomtypes_id');
        });
    }
}
