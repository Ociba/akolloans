<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Hash;
use Auth;

class InvestorsController extends Controller
{
    /**
     * This function gets investors.
     * @return Renderable
     */
    public function getInvestors()
    {
        return view('admin::investors');
    }
     /**
     * This function gets investors.
     */
    public function getSuspendedInvestors()
    {
        return view('admin::suspended-investors');
    }

    /**
     *This function creates approved investor
     */
    private function createInvestor()
    {
        $user_obj = new User;
        $user_obj->email              = request()->email;
        $user_obj->name               = request()->name;
        $user_obj->category_id               ="2";
        $user_obj->password    = Hash::make(request()->password);
        $user_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }

   /**
     * This function validates Investor created
     */
    public function validatecreateInvestor(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This  email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->createInvestor();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
     /**
        * This function suspends the User 
        */
        protected function suspendInvestor($investor_id){
            User::where('id',$investor_id)->update(array('status'=>'suspended'));
            return redirect()->back()->with('msg', 'You have Successfully suspended this User');
        }
        /** 
         * This function ctivates suspended User
        */
        protected function activateInvestor($investor_id){
            User::where('id',$investor_id)->update(array('status'=>'active'));
            return redirect()->back()->with('msg', 'You have Successfully activated '.request()->name.'');
        }
        /**
         * This function deletes users permanently
         */
        protected function deleteInvestor($investor_id){
            User::where('id',$investor_id)->delete();
            return redirect()->back()->with('msg', 'Operation Successful');
        }
}
