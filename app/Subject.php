<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // public $timestamps = false;
    protected $fillable=['ten_mon_hoc'];
    protected $primaryKey= 'id';
    protected $table= 'tbl_mon_hoc';

    public function  grades(){
        return $this->belongsToMany(Grade::class, 'tbl_khoi_lop_mon_hoc', 'mh_id', 'kl_id') //bang trung gian product_tags
        ->withTimestamps(); 
    }
}
