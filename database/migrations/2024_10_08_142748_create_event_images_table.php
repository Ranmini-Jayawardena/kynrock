<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
        Schema::create('event_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('event_images')->onDelete('cascade');
            $table->string('image_name');
            $table->timestamps();
    });
}

    /**ac
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_images');
        Schema::table('event_images', function (Blueprint $table) {
            //
            $table->dropForeign('event_id');
            $table->dropColumn('event_id');
        });
    }
}
