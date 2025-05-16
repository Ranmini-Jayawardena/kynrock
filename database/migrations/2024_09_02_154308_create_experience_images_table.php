<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
        Schema::create('experience_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id');
            $table->foreign('experience_id')->references('id')->on('experience')->onDelete('cascade');
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
        Schema::dropIfExists('experience_images');
        Schema::table('experience_images', function (Blueprint $table) {
            //
            $table->dropForeign('experience_id');
            $table->dropColumn('experience_id');
        });
    }
}
