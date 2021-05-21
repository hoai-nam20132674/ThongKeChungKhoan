<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('ma')->unique();
            $table->longText('tg')->nullable();
            $table->longText('tc')->nullable();
            $table->longText('gt')->nullable();
            $table->longText('gs')->nullable();
            $table->longText('g')->nullable();
            $table->longText('kll')->nullable();
            $table->longText('tkl_old')->nullable();
            $table->longText('tkl')->nullable();
            $table->longText('tb10')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('stocks');
    }
}
