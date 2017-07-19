<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->string('name')->nullable();
            $table->string('paternal_last_name')->nullable();
            $table->string('maternal_last_name')->nullable();
            $table->string('mobile_number', 20)->nullable()->unique();
            $table->integer('gender_id')->length(1)->unsigned()->nullable();
            $table->date('dob')->nullable();
        });

        Schema::table('user_info', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_info', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('user_info');
    }
}
