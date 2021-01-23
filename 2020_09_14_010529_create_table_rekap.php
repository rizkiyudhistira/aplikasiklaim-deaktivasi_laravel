<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRekap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_rekap', function (Blueprint $table) {
            $table->id();
            $table->date('periode_tagihan');
            $table->integer('jumlah_klaim');
            $table->integer('klaim_close');
            $table->integer('klaim_open');
            $table->integer('total_nilai_klaim');
            $table->integer('nilai_klaim_close');
            $table->integer('nilai_klaim_open');
            $table->integer('jumlah_deaktivasi');
            $table->integer('deaktivasi_close');
            $table->integer('deaktivasi_open');
            $table->integer('total_nilai_deaktivasi');
            $table->integer('nilai_deaktivasi_close');
            $table->integer('nilai_deaktivasi_open');
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
        Schema::dropIfExists('table_rekap');
    }
}
