<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BarangNota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('KodeNota')->constrained('nota','KodeNota');
            $table->foreignId('KodeBarang')->constrained('barang', 'KodeBarang');
            $table->integer('JumlahBarang');
            $table->integer('HargaSatuan');
            $table->integer('Jumlah');
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
        Schema::dropIfExists('BarangNota');
    }
}
