<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('event_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_id', 5)->nullable()->unique();
            $table->string('event_name');
            $table->string('location')->nullable();
            $table->decimal('price', 6, 0); // Example decimal column with 8 digits, 2 of which are decimal places
            $table->timestamps();
        });

        DB::table('event_information')->insert([
            ['event_id' => 'A001','event_name' => 'Event 1', 'location' => 'Location 1', 'price' => 1000],
            ['event_id' => 'A002','event_name' => 'Event 2', 'location' => 'Location 2', 'price' => 2000],
            ['event_id' => 'A003','event_name' => 'Event 3', 'location' => 'Location 3', 'price' => 1500],
            ['event_id' => 'A004','event_name' => 'Event 4', 'location' => 'Location 4', 'price' => 3000],
            ['event_id' => 'A005','event_name' => 'Event 5', 'location' => 'Location 5', 'price' => 4000],
            ['event_id' => 'A006','event_name' => 'Event 6', 'location' => 'Location 6', 'price' => 5500],
        ]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_information');
    }
};
