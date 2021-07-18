<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //membuat table
         Schema::create('pengeluaran',function(Blueprint $table){
            $table->increments('id_brg');
            $table->string('nama');
            $table->string('no_brg');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->date('tanggal');
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
