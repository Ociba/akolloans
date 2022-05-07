<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Hash;

class FrontController extends Controller
{
    protected function frontPage(){
    $get_services =DB::table('services')->get();
    $clients      =$this->countClients();
    $districts    =$this->countDistricts();
    $users        =$this->countUsers();
    $mesages      =DB::table('happy_clients')->limit(3)->latest()->get();
    $news         =DB::table('news')->limit(3)->latest()->get();
    return view('welcome',compact('get_services','clients','districts','users','mesages','news'));
    }
    /**
     * This function counts clients
     */
    private function countClients(){
        return DB::table('clients')->count();
    }
      /**
     * This function counts districts covered
     */
    private function countDistricts(){
        return DB::table('districts')->count();
    }
      /**
     * This function counts clients
     */
    private function countUsers(){
        return DB::table('users')->count();
    }

    /**
     * This function logins the client
     */ 
    private function registerClient()
    {
        $staff_obj = new User;
        $staff_obj->email              = request()->email;
        $staff_obj->name               = request()->name;
        $staff_obj->category_id               ="3";
        $staff_obj->password    = Hash::make(request()->password);
        $staff_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function validateregisterClient(Request $request)
    {
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This  email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->registerClient();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
}
