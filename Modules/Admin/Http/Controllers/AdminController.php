<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\StaffPermission;
use App\Models\Permission;
use App\Models\User;
use Auth;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * This function creates adminstration staff
     */
    public function createStaff()
    {
        $staff_obj = new User;
        $staff_obj->email              = request()->email;
        $staff_obj->name               = request()->name;
        $staff_obj->category_id               ="1";
        $staff_obj->password    = Hash::make(request()->password);
        $staff_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function validateCreateStaff(Request $request)
    {
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This  email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->createStaff();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }

    /**
     * This function gets permissons assigned to staff
     */
    public function getStaffPermissions($staff_id)
    {
        $staff =User::where('id',$staff_id)->get();

        $get_users_and_permission =StaffPermission::join('permissions','permissions.id','staff_permissions.permission_id')
        ->where('staff_permissions.staff_id',$staff_id)
        ->select('permissions.permission','staff_permissions.id')->simplePaginate(10);
        return view('admin::staff-permissions',compact('get_users_and_permission','staff'));
    }

   /**
   * This fucntion gets the permissions
   */
  protected function getPermissions($staff_id){
    $get_staff =User::where('id',$staff_id)->get();
    $get_permissions =Permission::simplePaginate(10);
    return view('admin::user_permissions',compact('get_staff','get_permissions'));
  }

    /**
   * This function saves selected permissions for type
   */
  public function assignPermissions($staff_id, Request $request){
    if(empty($request->user_permisions)){
        return redirect()->back()->withErrors("No updates were made, you didn't select any permision");
    }
    $permissions = $request->user_permisions;
        foreach($permissions as $permission){
            if(StaffPermission::where('staff_id',$staff_id)->where('permission_id',$permission)->exists()){
                continue;
            }
            else{
                StaffPermission::create(array(
                    'staff_id'       => $staff_id,
                    'permission_id' => $permission,
                    'user_id'       => Auth::user()->id
                ));
            }
        }
    return redirect()->back()->with('msg',"Operation Successfully");
}

   /**
 * This function  removes permission fron staff
 */
  public function unsignPermission($staff_id){
    StaffPermission::where('permission_id',$staff_id)->delete();
    return redirect()->back()->with('msg','Permission has been unsigned successfully');
  }
}
