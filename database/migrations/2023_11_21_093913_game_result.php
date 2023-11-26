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
        Schema::create('game_result', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('moves');
            $table->string('time');
            $table->string('mode');
            $table->timestamps();
        });
        DB::table('game_result')->insert([
            'user_name' => 'John',
            'moves' => '27',
            'time' => '15:42',
            'mode' => 'Medium',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_result');
    }
};
