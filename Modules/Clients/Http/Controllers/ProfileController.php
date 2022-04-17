<?php

namespace Modules\Clients\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Client;
use Hash;
use Auth;

class ProfileController extends Controller
{
    
      /**
     * This function gets form for changing password
     */
    protected function myProfile(){
        $get_my_profile =User::join('categories','categories.id','users.category_id')->where('users.id',auth()->user()->id)
        ->select('users.*','categories.category')->get();
        //gets client information saved
        $get_clients_info =Client::join('users','users.id','clients.user_id')
        ->join('districts','districts.id','clients.district_id')->where('users.id',auth()->user()->id)
        ->select('clients.*','districts.district')->get();

        //This function gets user inform if he or she is client
        return view('clients::my_profile',compact('get_my_profile','get_clients_info'));
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
    protected function editProfile(){
        return view('clients::edit_my_profile');
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('clients::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('clients::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('clients::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
