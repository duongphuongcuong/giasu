<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XaPhuongThiTran extends Model
{
    protected $fillable=['name','type','maqh'];
    protected $primaryKey= 'xaid';
    protected $table= 'tbl_xa_phuong_thi_tran';
}
