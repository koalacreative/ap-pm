<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_project', function (Blueprint $table) {
            $table->increments('project_id');
            $table->string('project_name');
            $table->integer('region_id');
            $table->integer('tahun');
            $table->integer('no_project');
            $table->integer('metode_pengadaan');
            $table->string('penjelasan_aanwizing');
            $table->string('jaminan_penawaran');
            $table->date('input_vms');
            $table->date('pengumuman_ev_penawaran');
            $table->string('undangan_negosiasi');
            $table->decimal('penawaran_harga_awal',15,2);
            $table->decimal('penawaran_harga_setelah_nego',15,2);
            $table->string('penetapan_pemenang');
            $table->string('jaminan_pelaksanaan');
            $table->date('date_begin');
            $table->date('date_end');
            $table->integer('jenis_pekerjaan');
            $table->string('no_kontrak');
            $table->string('sppk');
            $table->double('nilai_kontrak');
            $table->string('pembayaran');
            $table->string('bapp');
            $table->string('bast');
            $table->integer('status');
            $table->integer('user_id');
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
        Schema::drop('tbl_project');
    }
}
