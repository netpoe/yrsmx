<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTripTypeAndWeatherToQuizGetAway extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quiz_get_away', function (Blueprint $table) {
            $table->tinyInteger('trip_type')->nullable()->default(null);
            $table->tinyInteger('weather')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quiz_get_away', function (Blueprint $table) {
            $table->dropColumn('trip_type');
            $table->dropColumn('weather');
        });
    }
}
