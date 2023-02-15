<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable=[
        'ma_gs','mat_khau','quen_mat_khau','ten','ngay_sinh','gioi_tinh','so_cmnd','dia_chi','email','sdt','anh_cmnd_truoc','anh_cmnd_sau','avatar','anh_bang_cap_tsv','truong_hoc','chuyen_nganh','nam_tot_nghiep', 'nghe_nghiep','yeu_cau_luong','thong_tin_khac','trang_thai','trinh_do'
    ];
    protected $primaryKey= 'id';
    protected $table= 'tbl_gia_su';
}
