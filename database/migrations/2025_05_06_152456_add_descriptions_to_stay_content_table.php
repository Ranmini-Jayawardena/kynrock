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
            $table->longText('heading2')->after('description_en');
            $table->longText('description2')->after('heading2');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stay_content', function (Blueprint $table) {
            $table->dropColumn('heading2');
            $table->dropColumn('description2');
        });
    }
};
