<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('NRP')->primary();
            $table->string('divisi_id')->index();
            $table->string('namaDepan');
            $table->string('namaBelakang');
            $table->string('namaPanggilan');
            $table->string('asalJurusan');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('noHP');

            $table->timestamps();

            $table->foreign('divisi_id')->references('noDivisi')->on('divisis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
