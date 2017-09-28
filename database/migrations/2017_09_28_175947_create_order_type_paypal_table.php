<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTypePaypalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_type_paypal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->string('payment_id');
            $table->string('state');
            $table->string('cart');
            $table->string('create_time');
            $table->string('payer_status');
            $table->string('payer_email');
            $table->string('payer_first_name');
            $table->string('payer_middle_name');
            $table->string('payer_last_name');
            $table->string('payer_payer_id');
            $table->string('payer_country_code');
            $table->string('payer_recipient_name');
            $table->string('payer_street');
            $table->string('payer_city');
            $table->string('payer_state');
            $table->string('payer_postal_code');
        });

        Schema::table('order_type_paypal', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
        });

        Schema::dropIfExists('order_type_paypal');
    }
}
