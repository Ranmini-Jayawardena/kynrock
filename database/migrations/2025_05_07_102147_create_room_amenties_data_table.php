<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
            Schema::create('room_amenties_data', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('room_id');
                $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
                $table->unsignedBigInteger('amenities_id');
                $table->foreign('amenities_id')->references('id')->on('room_amenties')->onDelete('cascade');
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
            Schema::dropIfExists('room_amenties_data');
            Schema::table('room_amenties_data', function (Blueprint $table) {
                
                $table->dropForeign('room_id');
                $table->dropColumn('room_id');
                $table->dropForeign('amenities_id');
                $table->dropColumn('amenities_id');
            });
        }
    };
