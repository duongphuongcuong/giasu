<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuanHuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_quan_huyen', function (Blueprint $table) {
            $table->bigIncrements('maqh');
            $table->string('name');
            $table->string('type');
            $table->unsignedBigInteger('matp');
            $table->foreign('matp')->references('matp')->on('tbl_tinh_thanh_pho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_quan_huyen');
    }
}
