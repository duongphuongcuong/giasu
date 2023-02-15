<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable=['ten_khoi_lop'];
    protected $primaryKey= 'id';
    protected $table= 'tbl_khoi_lop';

    public function  subjects(){
        return $this->belongsToMany(Subject::class, 'tbl_khoi_lop_mon_hoc', 'kl_id', 'mh_id') //bang trung gian product_tags
        ->withTimestamps(); 
    }
}
