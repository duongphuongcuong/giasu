<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKhoilopMonhoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_khoi_lop_mon_hoc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kl_id');
            $table->unsignedBigInteger('mh_id');
            $table->foreign('kl_id')->references('id')->on('tbl_khoi_lop');
            $table->foreign('mh_id')->references('id')->on('tbl_mon_hoc');
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
        Schema::dropIfExists('tbl_khoi_lop_mon_hoc');
    }
}
