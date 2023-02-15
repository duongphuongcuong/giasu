<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableXaPhuongThiTran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_xa_phuong_thi_tran', function (Blueprint $table) {
            $table->bigIncrements('xaid');
            $table->string('name');
            $table->string('type');
            $table->unsignedBigInteger('maqh');
            $table->foreign('maqh')->references('maqh')->on('tbl_quan_huyen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_xa_phuong_thi_tran');
    }
}
