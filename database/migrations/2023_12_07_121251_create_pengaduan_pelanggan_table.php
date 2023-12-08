<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanPelangganTable extends Migration
{
    public function up()
    {
        Schema::create('pengaduan_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('platform');
            $table->string('permasalahan');
            $table->timestamp('waktu_aduan')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengaduan_pelanggan');
    }
}
