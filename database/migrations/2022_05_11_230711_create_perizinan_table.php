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
        Schema::create('perizinan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nik');
            $table->date('tanggallahir');
            $table->date('tanggalpengajuan');
            $table->string('jabatan');
            $table->string('atasan');
            $table->string('departemen');
            $table->string('alasancuti');
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
        Schema::dropIfExists('perizinan');
    }
};
