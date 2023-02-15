<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKhuVucDay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_khu_vuc_day', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gs_tinh_tp_day_id');
            $table->unsignedBigInteger('maqh');
            $table->foreign('gs_tinh_tp_day_id')->references('id')->on('tbl_gia_su_tinh_thanh_pho_day');
            $table->foreign('maqh')->references('maqh')->on('tbl_quan_huyen');
            $table->string('ten_xa_phuong_thi_tran')->nullable();
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
        Schema::dropIfExists('tbl_khu_vuc_day');
    }
}
