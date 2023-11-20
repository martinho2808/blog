<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_register', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 10);
            $table->string('lname', 10);
            $table->string('event_id', 5);
            $table->string('mobile', 8);
            $table->string('email', 30);
            $table->date('date');
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
        Schema::dropIfExists('events_register');
    }
}