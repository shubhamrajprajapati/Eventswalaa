<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('lname')->nullable();
            $table->mediumText('address1')->nullable();
            $table->mediumText('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('phone')->nullable();
            $table->string('alternet_phone')->nullable();
            $table->string('image')->nullable();
            $table -> tinyInteger('role_as')->default('0')->comment('0=user, 1=admin, 2=vendor');
            $table->tinyInteger('isban')->default('0');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_as');
        });
    }
};
