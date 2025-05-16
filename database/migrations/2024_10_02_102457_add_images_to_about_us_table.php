<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesToAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->string('image_1',255)->nullable(); // Adding 'image_1' column
            $table->string('image_2',255)->nullable(); // Adding 'image_2' column
            $table->string('image_3',255)->nullable(); // Adding 'image_3' column
            $table->string('image_4',255)->nullable(); // Adding 'image_3' column

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->dropColumn(['image_1', 'image_2', 'image_3','image_4']); // Dropping the columns
        });
    }
}
