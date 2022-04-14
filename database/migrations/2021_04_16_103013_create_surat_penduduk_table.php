<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratPendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_penduduk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->bigInteger('no_kk');
            $table->string('nama', 50);
            $table->string('alasan_pindah', 150);
            $table->integer('jumlah_pengikut');
            $table->boolean('status');
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
        Schema::dropIfExists('surat_penduduk');
    }
}
