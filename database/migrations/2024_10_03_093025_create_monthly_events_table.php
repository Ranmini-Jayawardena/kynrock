<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_events', function (Blueprint $table) {
            $table->id();
            $table->string('monthlyevent_name');
            $table->longText('description');
            $table->string('image_1',255);
            $table->string('image_2',255);
            $table->string('image_3',255);
            $table->string('image_4',255);
            $table->char('status',1);
            $table->tinyInteger('is_delete')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_events');
    }
};
