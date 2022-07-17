<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->id('id_absen');
            // $table->date('tanggal')->default(DB::raw('CURRENT_TIMESTAMP','Asia/Jakarta'))->setlocale('id');
            // $table->time('waktu')->default(DB::raw('CURRENT_TIMESTAMP','Asia/Jakarta'))->setlocale('id');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('deskripsi');
            $table->string('status');
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
        Schema::dropIfExists('absens');
    }
}
