<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTenxaphuongthitranTblKhuVucDay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_khu_vuc_day', function (Blueprint $table) {
            $table->dropColumn('ten_xa_phuong_thi_tran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_khu_vuc_day', function (Blueprint $table) {
            //
        });
    }
}
