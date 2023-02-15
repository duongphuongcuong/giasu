<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeSubject extends Model
{
    protected $fillable=['kl_id','mh_id '];
    protected $primaryKey= 'id';
    protected $table= 'tbl_khoi_lop_mon_hoc';
}
