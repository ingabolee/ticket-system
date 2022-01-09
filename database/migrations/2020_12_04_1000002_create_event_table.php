<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->bigInteger('event_event_type_id')->unsigned();
            $table->string('event_name');
            $table->dateTime('event_time', 0);
            $table->string('event_location');
            $table->float('event_price', 8, 2);
            $table->foreign('event_event_type_id')->references('event_type_id')->on('event_types')->onDelete('cascade');

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
        Schema::dropIfExists('event');
    }
}
