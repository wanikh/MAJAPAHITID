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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama');
            $table->string('email');
            $table->string('departemens');
            $table->string('jabatans');
            $table->bigInteger('niks');
            $table->string('tempatlahir');
            $table->date('tanggallahirs');
            $table->integer('usia');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('statuspernikan');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->bigInteger('nohp');
            $table->string('statuskaryawan');
            $table->date('tanggaljoins');
            $table->integer('kontrak');
            $table->bigInteger('bpjsketenagakerjaan');
            $table->bigInteger('bpjskesehatan');
            $table->bigInteger('npwp');
            $table->bigInteger('rekening');
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
        Schema::dropIfExists('profile');
    }
};
