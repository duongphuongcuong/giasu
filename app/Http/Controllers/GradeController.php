<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Subject;
use DB;
use App\GradeSubject;
use Toastr;
class GradeController extends Controller
{
    private $grade;
    private $subject;
    private $gradeSubject;
    public function __construct(Grade $grade, Subject $subject, GradeSubject $gradeSubject){
        $this->grade = $grade;
        $this->subject = $subject;
        $this->gradeSubject = $gradeSubject;
    }
    public function index(){
        $grades = $this->grade->all();
        return view('admin.subject_grade.grade.index',compact('grades',));
    }
    public function create(){
        $subjects = $this->subject->all();
        return view ('admin.subject_grade.grade.add', compact('subjects'));
    }
    public function store(Request $request){
       try{
            DB::beginTransaction();
            $grades = $this->grade->all();
            $isAvailable = 0;
            foreach($grades as $grade){
                if(strtolower($grade->ten_khoi_lop) == strtolower($request->name)){
                    $isAvailable = 1;
                    break;
                }
            }
            if($isAvailable){
                Toastr::success('Lớp học đã tổn tại!', 'Message');
                return redirect()->route('grade.index');
            }else{
                $gradeInstance = $this->grade->create([
                    'ten_khoi_lop' => $request->name 
                ]);
                $gradeInstance->subjects()->attach($request->subject);
                DB::commit(); 
                Toastr::success('Thêm lớp học mới thành công!', 'Message');
                return redirect()->route('grade.index');
            }
            
       }catch(\Exception $exception){
            DB::rollBack();
            \Log::error('Message: '. $exception->getMessage() . '---Line: ' . $exception->getLine());
            Toastr::error('Thêm không thành công, vui lòng kiểm tra lại!', 'Error');
            return redirect()->route('grade.index');
       }
        

    }
    public function edit($id){
        $grade = $this->grade->find($id);
        $subjects = $this->subject->all();
        $subjectOfgrade = $grade->subjects;
        return view('admin.subject_grade.grade.edit',compact('grade','subjects','subjectOfgrade'));
    }
    public function update($id, Request $request){
        try{
            DB::beginTransaction();
            $this->grade->find($id)->update([
                'ten_khoi_lop' => $request->name 
            ]);
            $gradeInstance = $this->grade->find($id);
            $gradeInstance->subjects()->sync($request->subject);
            DB::commit(); 
            Toastr::success('Cập nhật thành công!', 'Message');
            return redirect()->route('grade.index');  
       }catch(\Exception $exception){
            DB::rollBack();
            \Log::error('Message: '. $exception->getMessage() . '---Line: ' . $exception->getLine());
            Toastr::error('Cập nhật thất bại, đã tồn tại lớp học!', 'Error');
            return redirect()->route('grade.index');
       }
    }
    public function delete($id){
        try{
            $this->grade->find($id)->delete();
            Toastr::success('Xoá thành công!', 'Message');
             return redirect()->route('grade.index'); 
         }catch(\Exception $exception){
             \Log::error('Message: '. $exception->getMessage() . '---Line: ' . $exception->getLine());
             Toastr::error('Không thể xoá lớp học này!', 'Error');
             return redirect()->route('grade.index');     
         }
    }
}
