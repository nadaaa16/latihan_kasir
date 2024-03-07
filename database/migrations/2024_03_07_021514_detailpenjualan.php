<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detailpenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpenjualans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('detailID');
            $table->bigInteger('penjualanID');
            $table->bigInteger('produkID');
            $table->bigInteger('jumlahProduk');
            $table->decimal('subTotal', 10, 2);
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
        //
    }
}
