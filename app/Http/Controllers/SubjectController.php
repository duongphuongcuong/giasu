<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Toastr;
class SubjectController extends Controller
{
    public function __construct(Subject $subject){
        $this->subject = $subject;
    }
    public function index(){
        $subjects = $this->subject->all();
        return view('admin.subject_grade.subject.index',compact('subjects'));
    }
    public function create(){
        return view ('admin.subject_grade.subject.add');
    }
    public function store(Request $request){
        $subject = $this->subject->get();
        $isAvailable = 0;
        foreach($subject as $sub){
            if(strtolower($request->name) === strtolower($sub->ten_mon_hoc)){
                $isAvailable = 1; break;
            }
        }
        if($isAvailable == 1){
            Toastr::error('Môn học đã tồn tại!', 'Error');
            return redirect()->route('subject.create');
        }else{
            $this->subject->create([
                'ten_mon_hoc' => $request->name
            ]);
            Toastr::success('Thêm môn học mới thành công!', 'Message');
            return redirect()->route('subject.index');
        }
        
    }
    public function edit($id){
        $subject = $this->subject->find($id);
        return view('admin.subject_grade.subject.edit',compact('subject'));
    }
    public function update($id, Request $request){
        $subjects = $this->subject->whereNotIn('id',[$id])->get();
        $isAvailable = 0;
        foreach($subjects as $sub){
            if(strtolower($request->name) === strtolower($sub->ten_mon_hoc)){
                $isAvailable = 1; break;
            }
        }
        // dd($isAvailable);
        if($isAvailable == 1){
            Toastr::error('Môn học đã tồn tại!', 'Error');
            return redirect()->route('subject.edit',['id'=>$id]);
        }else{
            $this->subject->find($id)->update([
                'ten_mon_hoc' => $request->name
            ]);
            Toastr::success('Cập nhật môn học thành công!', 'Message');
            return redirect()->route('subject.index');
        }
    }
    public function delete($id){
        try{
            $this->subject->find($id)->delete();
            Toastr::success('Xoá thành công!', 'Message');
             return redirect()->route('subject.index'); 
         }catch(\Exception $exception){
             \Log::error('Message: '. $exception->getMessage() . '---Line: ' . $exception->getLine());
             Toastr::error('Không thể xoá môn học này!', 'Error');
             return redirect()->route('subject.index');     
         }
    }
}
