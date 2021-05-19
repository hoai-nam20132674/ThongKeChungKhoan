<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sacks', function (Blueprint $table) {
            $table->id();
            $table->string('ma')->unique();
            $table->dateTime('ktqnh')->nullable();
            $table->dateTime('xktq')->nullable();
            $table->dateTime('tkvn')->nullable();
            $table->dateTime('ht')->nullable();
            $table->longText('history')->nullable();
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
        Schema::dropIfExists('sacks');
    }
}
