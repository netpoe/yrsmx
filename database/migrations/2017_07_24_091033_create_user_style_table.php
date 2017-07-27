<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_style', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->unsigned();
            $table->string('colors')->nullable()->default(null)->comment('Hex colors separated by pipes');
            $table->string('prints')->nullable()->default(null);
            $table->string('fabrics')->nullable()->default(null);
            $table->string('words')->nullable()->default(null);
            $table->string('clothes')->nullable()->default(null);
            $table->string('accessories')->nullable()->default(null);
            $table->string('shoes')->nullable()->default(null);
            $table->string('jewelry')->nullable()->default(null);
            $table->string('risk')->nullable()->default(null);
        });

        Schema::table('user_style', function(Blueprint $table){
            $table->foreign('quiz_id')->references('id')->on('quiz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_style', function (Blueprint $table) {
            $table->dropForeign(['quiz_id']);
        });

        Schema::dropIfExists('user_style');
    }
}
