<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->unsigned();
            $table->decimal('height', 6, 2)->unsigned()->nullable()->default(null);
            $table->decimal('weight', 6, 2)->unsigned()->nullable()->default(null);
            $table->string('dress', 4)->nullable()->default(null);
            $table->string('blouse', 4)->nullable()->default(null);
            $table->string('bra', 4)->nullable()->default(null);
            $table->string('skirt', 4)->nullable()->default(null);
            $table->string('shoes', 4)->nullable()->default(null);
            $table->string('pants', 4)->nullable()->default(null);
        });

        Schema::table('user_sizes', function(Blueprint $table){
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
        Schema::table('user_sizes', function (Blueprint $table) {
            $table->dropForeign(['quiz_id']);
        });

        Schema::dropIfExists('user_sizes');
    }
}
