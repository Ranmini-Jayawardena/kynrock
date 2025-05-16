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
        Schema::table('room_types', function (Blueprint $table) {
            $table->string('meta_title')->after('room_name');
            $table->string('title')->after('description_en');
            $table->string('home_title')->after('title');
            $table->string('home_content1')->after('home_title');
            $table->string('home_content2')->after('home_content1');
            $table->string('home_image')->after('home_content2');
            $table->tinyInteger('checkbox')->default('0')->after('home_image');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_types', function (Blueprint $table) {
            $table->dropColumn('meta_title');
            $table->dropColumn('title');
            $table->dropColumn('home_title');
            $table->dropColumn('home_content1');
            $table->dropColumn('home_content2');
            $table->dropColumn('home_image');
            $table->dropColumn('checkbox');
        });
    }
};
