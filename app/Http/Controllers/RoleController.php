<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use DB;
use Toastr;
class RoleController extends Controller
{
    private $role;
    private $permission;
    public function __construct(Role $role, Permission $permission){
        $this->role = $role;
        $this->permission = $permission;
    }
    public function index(){
        $roles = $this->role->paginate(10);
        return view('admin.role.index', compact('roles'));
    }
    public function create(){
        $permissionParent = $this->permission->where('parent_id',0)->get();
        return view('admin.role.add',compact('permissionParent'));
    }
    public function store(Request $request){
        // dd($request->all());
        $role = $this->role->create([
            'name' => $request->name,
            'display_name' => $request->display_name
        ]);

        $role->permissions()->attach($request->permission_id);
        return redirect()->route('role.index');
    }
    public function edit($id){
        $permissionParent = $this->permission->where('parent_id',0)->get();
        $role = $this->role->find($id);
        $permissionChecked = $role->permissions;

        return view('admin.role.edit',compact('permissionParent','role','permissionChecked'));
    }
    public function update($id, Request $request){
        $role = $this->role->find($id);
        $role->update([
            'name' => $request->name,
            'display_name' => $request->display_name
        ]);
        
        $role->permissions()->sync($request->permission_id);
        Toastr::success('Cập nhật thành công!', 'Message');
        return redirect()->route('role.index');
    }
    public function delete($id){
        try{
            DB::beginTransaction();
            DB::table('permission_role')->where('role_id', $id)->delete();
            $this->role->find($id)->delete();
            DB::commit();
            Toastr::success('Xoá thành công!', 'Message');
            return redirect()->route('role.index');
        }catch(\Exception $exception){
            DB::rollBack();
            \Log::error('Message: ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
            Toastr::success('Xoá không thành công!', 'Message');
            return redirect()->route('role.index');
        }
    }
}
