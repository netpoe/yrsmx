<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Model\LuUserRole;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->length(2)->unsigned()->default(LuUserRole::CLIENT)->comment('FK references lu_user_roles table. The role assigned to the user.');
            $table->string('email')->unique();
            $table->string('token', 30)->nullable();
            $table->integer('is_verified')->length(1)->default(0);
            $table->string('referral_code', 7)->nullable();
            $table->integer('referred_by')->unsigned()->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
