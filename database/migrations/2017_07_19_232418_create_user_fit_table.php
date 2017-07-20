<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->unsigned()->unique();
            $table->tinyInteger('upper_part_fit')->unsigned()->nullable()->default(null);
            $table->tinyInteger('lower_part_fit')->unsigned()->nullable()->default(null);
            $table->tinyInteger('pants_fit_shape')->unsigned()->nullable()->default(null);
            $table->tinyInteger('pants_fit_hips')->unsigned()->nullable()->default(null);
        });

        Schema::table('user_fit', function(Blueprint $table){
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
        Schema::table('user_fit', function (Blueprint $table) {
            $table->dropForeign(['quiz_id']);
        });

        Schema::dropIfExists('user_fit');
    }
}
