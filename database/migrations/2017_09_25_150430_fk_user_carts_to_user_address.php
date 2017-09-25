<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkUserCartsToUserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_carts', function (Blueprint $table) {
            $table->integer('user_address_id')->unsigned()->nullable()->after('user_id');
            $table->foreign('user_address_id')->references('id')->on('user_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_carts', function (Blueprint $table) {
            $table->dropForeign(['user_address_id']);
        });
    }
}
