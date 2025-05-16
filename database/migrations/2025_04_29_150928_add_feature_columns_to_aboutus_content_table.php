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
        Schema::table('aboutus_content', function (Blueprint $table) {
            $table->string('feature_icon1')->after('image1');
            $table->string('feature_name1')->after('feature_icon1');
            $table->longText('feature_description1')->after('feature_name1');

            $table->string('feature_icon2')->after('feature_description1');
            $table->string('feature_name2')->after('feature_icon2');
            $table->longText('feature_description2')->after('feature_name2');

            $table->string('feature_icon3')->after('feature_description2');
            $table->string('feature_name3')->after('feature_icon3');
            $table->longText('feature_description3')->after('feature_name3');

            $table->string('feature_icon4')->after('feature_description3');
            $table->string('feature_name4')->after('feature_icon4');
            $table->longText('feature_description4')->after('feature_name4');

            $table->string('feature_icon5')->after('feature_description4');
            $table->string('feature_name5')->after('feature_icon5');
            $table->longText('feature_description5')->after('feature_name5');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aboutus_content', function (Blueprint $table) {
            $table->dropColumn('feature_icon1');
            $table->dropColumn('feature_name1');
            $table->dropColumn('feature_description1');

            $table->dropColumn('feature_icon2');
            $table->dropColumn('feature_name2');
            $table->dropColumn('feature_description2');

            $table->dropColumn('feature_icon3');
            $table->dropColumn('feature_name3');
            $table->dropColumn('feature_description3');

            $table->dropColumn('feature_icon4');
            $table->dropColumn('feature_name4');
            $table->dropColumn('feature_description4');

            $table->dropColumn('feature_icon5');
            $table->dropColumn('feature_name5');
            $table->dropColumn('feature_description5');
        });
    }
};
