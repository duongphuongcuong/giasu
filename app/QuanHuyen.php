<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuanHuyen extends Model
{
    protected $fillable=['name','type','matp'];
    protected $primaryKey= 'maqh';
    protected $table= 'tbl_quan_huyen';
}
