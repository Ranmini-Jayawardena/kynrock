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
        Schema::table('stay_content', function (Blueprint $table) {
            $table->longText('description3')->after('description2');
            $table->string('image')->after('description3');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stay_content', function (Blueprint $table) {
            $table->dropColumn('description3');
            $table->dropColumn('image');
        });
    }
};
