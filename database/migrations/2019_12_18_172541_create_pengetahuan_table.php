<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengetahuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengetahuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_penyakit')->unsigned();
            $table->bigInteger('id_gejala')->unsigned();
            $table->Double('nilai_mb');
            $table->Double('nilai_md');
            $table->Double('nilai_cf');
            $table->timestamps();

            $table->foreign('id_penyakit')
                  ->references('id')
                  ->on('penyakit')
                  ->onDelete('cascade');
            
            $table->foreign('id_gejala')
                  ->references('id')
                  ->on('gejala')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengetahuan');
    }
}
