<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKlaim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_klaim', function (Blueprint $table) {
            $table->id();
            $table->date('periode_tagihan');
            $table->date('tgl_terima');
            $table->string('customer');
            $table->string('produk');
            $table->string('dasar_permohonan');
            $table->integer('sid');
            $table->integer('no_order');
            $table->string('status_order');
            $table->string('status_klaim');
            $table->integer('nilai_klaim');
            $table->string('hasil_ram_terakhir');
            $table->string('grup');
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
        Schema::dropIfExists('table_klaim');
    }
}
