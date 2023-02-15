<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGiasuTinhThanhphoDay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_gia_su_tinh_thanh_pho_day', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gs_id')->unique();
            $table->unsignedBigInteger('matp');
            $table->foreign('gs_id')->references('id')->on('tbl_gia_su');
            $table->foreign('matp')->references('matp')->on('tbl_tinh_thanh_pho');
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
        Schema::dropIfExists('tbl_gia_su_tinh_thanh_pho_day');
    }
}
