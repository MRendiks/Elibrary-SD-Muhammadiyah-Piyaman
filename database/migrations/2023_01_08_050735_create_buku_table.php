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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku')->nullable();
            $table->string('judul_buku')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('jenis_buku')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('rak')->nullable();
            $table->integer('stok')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('buku');
    }
};
