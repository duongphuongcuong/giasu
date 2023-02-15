<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use DB;
use Toastr;
class UserController extends Controller
{
    private $user;
    private $role;
    
    public function __construct(User $user, Role $role){
        $this->user = $user;
        $this->role = $role;
    }
    public function index(){
        $users = $this->user->paginate(10);
        return view('admin.user.index',compact('users'));
    }
    public function create(){
        $roles = $this->role->all();
        return view('admin.user.add',compact('roles'));
    }
    public function store(Request $request){
        try{
            DB::beginTransaction();
            $issetUser = $this->user->where('email',$request->email)->first();

            if($issetUser != null){
                Toastr::success('Email đã tồn tại!', 'Message');
                return redirect()->route('user.index');
            }else{
                $user = $this->user->create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
                $user->roles()->attach($request->role_id);
                DB::commit();
                Toastr::success('Thêm nhân viên thành công!', 'Message');
                return redirect()->route('user.index');
            }
            
        }catch(\Exception $exception){
            DB::rollBack();
            \Log::error('Message: ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
            Toastr::error('Thêm nhân viên không thành công!', 'Error');
             return redirect()->route('user.create');
        }
    }

    public function edit($id){
        $roles = $this->role->all();
        $user = $this->user->find($id);
        $rolesOfUser = $user->roles;
        // dd($rolesOfUser);
        return view('admin.user.edit',compact('roles','user','rolesOfUser'));
    }
    public function update($id, Request $request){
        try{
            DB::beginTransaction();
            $this->user->find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                
            ]);
            $user=$this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            Toastr::success('Cập nhật thành công!', 'Message');
            return redirect()->route('user.index');
        }catch(\Exception $exception){
            DB::rollBack();
            \Log::error('Message: ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
            Toastr::error('Cập nhật không thành công!', 'Error');
            return redirect()->route('user.edit',['id'=>$id]);
        }
    }
    public function delete($id){
        try{
            DB::beginTransaction();
            DB::table('role_user')->where('user_id', $id)->delete();
            $this->user->find($id)->delete();
            DB::commit();
            Toastr::success('Xoá thành công!', 'Message');
            return redirect()->route('user.index');
        }catch(\Exception $exception){
            DB::rollBack();
            \Log::error('Message: ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
            Toastr::success('Xoá không thành công!', 'Message');
            return redirect()->route('user.index');
        }
    }
}
