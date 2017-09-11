<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkUserProductsToUserOutfits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_products', function(Blueprint $table){
            $table->integer('outfit_id')->unsigned()->after('user_id');
            $table->foreign('outfit_id')->references('id')->on('user_outfits');
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
            $table->dropForeign(['outfit_id']);
        });
    }
}
