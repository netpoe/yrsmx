<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPreferredBodyPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_preferred_body_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->unsigned()->unique();
            $table->tinyInteger('user_body_type')->unsigned()->nullable()->default(null);
            $table->tinyInteger('thighs')->unsigned()->nullable()->default(null);
            $table->tinyInteger('calves')->unsigned()->nullable()->default(null);
            $table->tinyInteger('butt')->unsigned()->nullable()->default(null);
            $table->tinyInteger('abdomen')->unsigned()->nullable()->default(null);
            $table->tinyInteger('hips')->unsigned()->nullable()->default(null);
            $table->tinyInteger('breast')->unsigned()->nullable()->default(null);
            $table->tinyInteger('shoulders')->unsigned()->nullable()->default(null);
            $table->tinyInteger('arms')->unsigned()->nullable()->default(null);
        });

        Schema::table('user_preferred_body_parts', function(Blueprint $table){
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
        Schema::table('user_preferred_body_parts', function (Blueprint $table) {
            $table->dropForeign(['quiz_id']);
        });

        Schema::dropIfExists('user_preferred_body_parts');
    }
}
