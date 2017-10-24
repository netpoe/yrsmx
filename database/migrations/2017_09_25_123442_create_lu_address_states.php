<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictAddressStates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dict_address_states', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->string('value');
        });

        Schema::table('dict_address_states', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('dict_address_countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dict_address_states', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
        });

        Schema::dropIfExists('dict_address_states');
    }
}
