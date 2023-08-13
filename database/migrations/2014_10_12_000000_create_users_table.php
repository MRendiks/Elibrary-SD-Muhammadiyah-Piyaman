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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('kode_anggota')->nullable();
            $table->string('nama_anggota')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('jenis_kelamin')->nullable();
            $table->string('kelas')->nullable();
            $table->enum('level', ['petugas', 'anggota'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
