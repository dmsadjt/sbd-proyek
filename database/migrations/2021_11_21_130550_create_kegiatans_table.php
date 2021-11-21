<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('noKegiatan')->primary();
            $table->string('divisi_id')->index();
            $table->string('judulKegiatan');
            $table->string('jenisKegiatan');
            $table->date('jadwalKegiatan');
            $table->string('tuk');

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
        Schema::dropIfExists('kegiatans');
    }
}
