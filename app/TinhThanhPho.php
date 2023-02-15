<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinhThanhPho extends Model
{
    protected $fillable=['name','type','slug'];
    protected $primaryKey= 'matp';
    protected $table= 'tbl_tinh_thanh_pho';
}
