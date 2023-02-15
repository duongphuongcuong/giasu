<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;
use App\Subject;
use App\Grade;
use App\TinhThanhPho;
use App\QuanHuyen;
use App\XaPhuongThiTran;
use DB;
class TutorController extends Controller
{
    private $grade, $subject, $tinhtp, $quanhuyen, $xaphuong_thitran;
    public function __construct(Grade $grade, Tutor $tutor, Subject $subject, TinhThanhPho $tinhtp, QuanHuyen $quanhuyen, XaPhuongThiTran $xaphuong_thitran){
        $this->grade = $grade;
        $this->subject = $subject;
        $this->tinhtp = $tinhtp;
        $this->quanhuyen = $quanhuyen;
        $this->xaphuong_thitran = $xaphuong_thitran;
    }
    public function register(){
        $tinhtp = $this->tinhtp->all();
        $monday = $this->subject->all();
        return view('client.giasu.dangki',compact('tinhtp','monday'));
    }
    public function fectQuanHuyen(Request $request){
        $quanhuyen = $this->quanhuyen->where('matp',$request->matp)->get();
        $output = '<option value=""> Chọn quận huyện </option>';
        foreach($quanhuyen as $qh){
            $output .= '<option value="'.$qh->maqh.'">' .$qh->name. '</option>';
        }
        return $output;
    }
    public function fectXaPhuong(Request $request){
        $xaphuong = $this->xaphuong_thitran->where('maqh',$request->maqh)->get();
        $output = '<option value=""> Chọn phường </option>';
        foreach($xaphuong as $xp){
            $output .= '<option value="'.$xp->xaid.'">' .$xp->name. '</option>';
        }
        return $output;
    }
    public function renderLop(Request $request){
        if($request->id_monhoc != null){
            $html = '<div class="mb-3 row">
                <label class="col-sm-3 col-form-label lable_giasu" >Lớp dạy</label>
                <div class="col-sm-9 checkbox_render">
                    <div class="row">';
            $monhoc = $this->subject->find($request->id_monhoc);
            foreach($monhoc->grades as $kl){
                $html .= '<div class="col-sm-3"> <input class="input_lophoc_checkbox" name="input_lopdaycheckbox[]" value="'.$kl->id.'" type="checkbox"> <span>'.$kl->ten_khoi_lop.'</span> </div>'; 
            }
            $html .=    '<div style="padding-top: 10px;">
                            <a href="javascript:void(0)" onclick="addListLopDay();" class="add_choose_list_lopday">Lưu lựa chọn</a>
                            </div>
                        </div>
                    </div>';
            return $html;
        }else{
            return '';
        }
        
    }
    public function renderQuanHuyen(Request $request){
        if($request->matp != null){
            $html = '<div class="mb-3 row">
                <label class="col-sm-3 col-form-label lable_giasu" >Quận Huyện</label>
                <div class="col-sm-9 checkbox_render">
                    <div class="row">';
            $quanhuyen = $this->quanhuyen->where('matp',$request->matp)->get();
            foreach($quanhuyen as $qh){
                $html .= '<div class="col-sm-3"> <input name="" value="'.$qh->maqh.'" type="checkbox"> <span>'.$qh->name.'</span> </div>'; 
            }
            $html .=    '<div style="padding-top: 10px;" class="row">
                            <a href="javascript:void(0)" class="add_choose_list_kvday">Lưu lựa chọn</a>
                        </div>
                    </div>
                </div>';
            return $html;
        }else{
            return '';
        }
    }
    public function registerPost(Request $request){

    }
}
