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
        Schema::table('contact_us_details', function (Blueprint $table) {
            $table->string('twitter_url')->nullable()->after('instagram_url');
            $table->string('youtube_url')->nullable()->after('twitter_url');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_us_details', function (Blueprint $table) {
            $table->dropColumn('twitter_url');
            $table->dropColumn('youtube_url');
        });
    }
};
