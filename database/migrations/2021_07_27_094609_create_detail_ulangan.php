<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailUlangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_ulangan', function (Blueprint $table) {
			$table->bigIncrements('id');
            $table->integer('siswa_id');
            $table->integer('kelas_id');
            $table->integer('guru_id');
            $table->integer('mapel_id');
            $table->date('tanggal_ulangan');
            $table->string('nilai', 5);
            $table->string('keterangan', 120);
			$table->timestamps();
            //$table->string('ulha_3', 5)->nullable();
            //$table->string('uas', 5)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_ulangan');
    }
}
