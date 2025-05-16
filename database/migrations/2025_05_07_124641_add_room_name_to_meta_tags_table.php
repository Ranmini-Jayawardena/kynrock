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
        Schema::table('meta_tags', function (Blueprint $table) {
            $table->string('room_name')->nullable()->after('page_title');
            $table->string('page_id')->nullable()->after('room_name');
            $table->string('robots')->nullable()->after('keywords');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meta_tags', function (Blueprint $table) {
            $table->dropColumn('room_name');
            $table->dropColumn('page_id');
        });
    }
};
