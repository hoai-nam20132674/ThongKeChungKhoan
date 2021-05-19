<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_notes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->dateTime('nt')->nullable();
            $table->dateTime('ktn')->nullable();
            $table->dateTime('ns')->nullable();
            $table->dateTime('nth')->nullable();
            $table->integer('tiencan')->nullable();
            $table->integer('phiphatsinh')->nullable();
            $table->integer('philuukho')->nullable();
            $table->integer('phiship')->nullable();
            $table->integer('total')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->string('kx')->nullable();
            $table->string('nvx')->nullable();
            $table->string('pids')->nullable();
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
        Schema::dropIfExists('delivery_notes');
    }
}
