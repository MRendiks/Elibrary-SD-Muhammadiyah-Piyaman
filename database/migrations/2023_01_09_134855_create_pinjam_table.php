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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned();
            $table->bigInteger('bukuId')->unsigned();
            $table->date('tgl_pinjam')->nullable();
            $table->date('tgl_kembali')->nullable();
            $table->enum('status', ['dipinjam', 'dikembalikan'])->nullable();
            $table->string('keterlambatan')->default('0');
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bukuId')->references('id')->on('buku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam');
    }
};
