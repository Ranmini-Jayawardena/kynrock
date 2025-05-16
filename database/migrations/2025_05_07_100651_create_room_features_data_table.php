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
            Schema::create('room_features_data', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('room_id');
                $table->foreign('room_id')->references('id')->on('room_types')->onDelete('cascade');
                $table->unsignedBigInteger('feature_id');
                $table->foreign('feature_id')->references('id')->on('room_features')->onDelete('cascade');
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
            Schema::dropIfExists('room_features_data');
            Schema::table('room_features_data', function (Blueprint $table) {
                //
                $table->dropForeign('room_id');
                $table->dropColumn('room_id');
                $table->dropForeign('feature_id');
                $table->dropColumn('feature_id');
            });
        }
    };