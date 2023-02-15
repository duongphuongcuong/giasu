<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGiaSu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_gia_su', function (Blueprint $table) {
            $table->id();
            $table->string('ma_gs')->unique();
            $table->string('mat_khau');
            $table->string('quen_mat_khau');
            $table->string('ten');
            $table->string('ngay_sinh');
            $table->string('gioi_tinh');
            $table->string('so_cmnd');
            $table->string('dia_chi');
            $table->string('email');
            $table->string('sdt');
            $table->string('anh_cmnd_truoc');
            $table->string('anh_cmnd_sau');
            $table->string('avatar');
            $table->string('anh_bang_cap_tsv');
            $table->string('truong_hoc');
            $table->string('chuyen_nganh');
            $table->string('nam_tot_nghiep');
            $table->string('nghe_nghiep');
            $table->string('yeu_cau_luong');
            $table->text('thong_tin_khac')->nullable();
            $table->integer('trang_thai')->default(-1);
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
        Schema::dropIfExists('tbl_gia_su');
    }
}
