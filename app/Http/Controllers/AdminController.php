<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAdmin(){
        // dd(bcrypt('admin'));
       if(auth()->check()){
            return redirect()->to('admin/home');
        }
        return view('admin.auth.login');
    }
    public function checkLoginAdmin(Request $request){
        $remember = $request->has('remember') ? true : false;
        if(auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ],$remember)){
            return redirect()->to('admin/home');
       }else{
            session()->put('error_loginAmin', 'Đăng nhập không thành công, vui lòng kiểm tra lại email hoặc mật khẩu!');
            return redirect()->to('/admin');
       }
    }
    public function logout(Request $request)
    {
        auth()->logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/admin');
    }
}
