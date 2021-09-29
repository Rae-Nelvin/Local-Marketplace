<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('pesanan_id')->references('id')->on('pesanans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('stocks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('jumlah_pesanan');
            $table->bigInteger('jumlah_harga');
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
        Schema::dropIfExists('pesanan_details');
    }
}
