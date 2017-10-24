<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkUserFitToDictProductSubcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_fit', function (Blueprint $table) {
            $table->foreign('upper_part_fit')->references('id')->on('dict_product_subcategories');
            $table->foreign('lower_part_fit')->references('id')->on('dict_product_subcategories');
            $table->foreign('pants_fit_shape')->references('id')->on('dict_product_subcategories');
            $table->foreign('pants_fit_hips')->references('id')->on('dict_product_subcategories');
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
            $table->dropForeign(['upper_part_fit']);
            $table->dropForeign(['lower_part_fit']);
            $table->dropForeign(['pants_fit_shape']);
            $table->dropForeign(['pants_fit_hips']);
        });
    }
}
