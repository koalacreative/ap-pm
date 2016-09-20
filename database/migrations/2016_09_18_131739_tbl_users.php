<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->increments('users_id');
            $table->string('username');
            $table->string('password');
            $table->integer('role_id');
            $table->integer('region_id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('nik');
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
        //
        Schema::drop('tbl_users');
    }
}
