<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSPIDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spids', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sack_id')->unsigned();
            $table->foreign('sack_id')->references('id')->on('sacks')->onDelete('cascade');
            $table->bigInteger('properties_id')->unsigned();
            $table->foreign('properties_id')->references('id')->on('properties')->onDelete('cascade');
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
        Schema::dropIfExists('spids');
    }
}
