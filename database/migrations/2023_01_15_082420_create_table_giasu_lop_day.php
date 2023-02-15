<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGiasuLopDay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_gia_su_lop_day', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gs_id');
            $table->unsignedBigInteger('kl_mh_id');
            $table->foreign('gs_id')->references('id')->on('tbl_gia_su');
            $table->foreign('kl_mh_id')->references('id')->on('tbl_khoi_lop_mon_hoc');
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
        Schema::dropIfExists('tbl_gia_su_lop_day');
    }
}
