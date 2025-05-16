<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivacyPolicyTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('privacy_policy', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->tinyInteger('order');
            $table->char('status',1);
            $table->tinyInteger('is_delete')->default('0');
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
        Schema::dropIfExists('privacy_policy');
    }
};





