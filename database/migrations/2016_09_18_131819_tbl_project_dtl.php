<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProjectDtl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_project_dtl', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->integer('project_id');
            $table->date('periode_begin');
            $table->date('periode_end');
            $table->integer('rencana');
            $table->integer('realisasi');
            $table->integer('deviasi');
            $table->string('issue');
            $table->string('action_plan');
            $table->integer('user_id');
            $table->dateTime('last_update');
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
        Schema::drop('tbl_project_dtl');
    }
}
