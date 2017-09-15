<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkAddCartIdToUserProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_products', function (Blueprint $table) {
            $table->integer('cart_id')->unsigned()->nullable();
            $table->integer('amount')->unsigned()->default(0);
            $table->foreign('cart_id')->references('id')->on('user_carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_products', function (Blueprint $table) {
            $table->dropForeign(['cart_id']);
        });
    }
}
