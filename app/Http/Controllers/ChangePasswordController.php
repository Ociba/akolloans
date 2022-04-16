<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class ChangePasswordController extends Controller
{
    /**
     * This function gets form for changing password
     */
    protected function changePassword(){
        $get_my_profile =User::join('categories','categories.id','users.category_id')->where('users.id',auth()->user()->id)
        ->select('users.*','categories.category')->get();

        //This function gets user inform if he or she is client
        return view('change_password',compact('get_my_profile'));
    }
    /** 
     * This function changes user password for current authenticated user
    */
    protected function updateUserPassword(Request $request) {
     $get_users_current_password = User::where('id',auth()->user()->id)->value('password');
        $current_password = $request->current_password;
        if ($request->new_password == $request->confirm_password) {
            if (Hash::check($current_password, $get_users_current_password)) {
                User::where("id", Auth::user()->id)->update(array('password' => Hash::make($request->new_password)));
               // Auth::logout();
                return redirect('/logout');
            } else {
                return Redirect()->back()->withInput()->withErrors("Incorrect password has been supplied");
            }
        } else {
            return Redirect()->back()->withInput()->withErrors("Make sure the two new passwords match");
        }
        return redirect()->back()->with('msg','Operation successful');
    }
}
