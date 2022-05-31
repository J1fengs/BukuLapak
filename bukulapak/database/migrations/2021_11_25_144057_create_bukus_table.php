<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('keranjang_id');

            $table->foreign('keranjang_id')->references('id')->on('keranjangs');
            $table->string('judul');
            $table->string('penerbit');
            $table->string('pengarang');
            $table->string('jenis');
            $table->year('tahun_terbit');
            $table->integer('harga');
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
        Schema::dropIfExists('bukus');
    }
}
