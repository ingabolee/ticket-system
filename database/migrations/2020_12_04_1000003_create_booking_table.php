<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('booking_id');
            $table->date('booking_date');
            $table->bigInteger('booking_customer_id')->unsigned();
            $table->foreign('booking_customer_id')->references('customer_id')->on('customers')->onDelete('cascade');
            $table->bigInteger('booking_event_id')->unsigned();
            $table->foreign('booking_event_id')->references('event_id')->on('events')->onDelete('cascade');
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
        Schema::dropIfExists('booking');
    }
}
