<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('ma')->unique();
            $table->string('mvd')->nullable();
            $table->integer('sl')->nullable();
            $table->bigInteger('sack_id')->unsigned();
            $table->foreign('sack_id')->references('id')->on('sacks')->onDelete('cascade');
            $table->dateTime('mhx')->nullable();
            $table->dateTime('stqph')->nullable();
            $table->dateTime('ktqnh')->nullable();
            $table->dateTime('xktq')->nullable();
            $table->dateTime('tkvn')->nullable();
            $table->dateTime('dth')->nullable();
            $table->string('kkc')->nullable();
            $table->integer('cannang')->nullable();
            $table->integer('dai')->nullable();
            $table->integer('rong')->nullable();
            $table->integer('cao')->nullable();
            $table->integer('cnqd')->nullable();
            $table->integer('dongiacan')->nullable();
            $table->integer('dongiakhoi')->nullable();
            $table->integer('price')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('mpxk')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
