<?php

namespace Modules\Investors\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Package;
use App\Models\District;
use App\Models\Investor;
use App\Models\User;
use Auth;

class PackagesController extends Controller
{
    /**
     * Display the packages to be choosen by investor.
     * @return Renderable
     */
    public function getPackages()
    {
        return view('investors::investors_packages');
    }
    /**
     * This function gets form for depositing package
     */
    protected function getPackageDepositForm($package_id)
    {
        $get_package =Package::where('id',$package_id)->get();
        $district_id =District::select('id','district')->get();
        return view('investors::package_deposit',compact('get_package','district_id'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    private function createPackage()
    {
        $package_id =request()->package_id;
        $from =Package::where('id',$package_id)->value('from');
        
        $to =Package::where('id',$package_id)->value('to');

        if(request()->amount_deposited < $from || request()->amount_deposited >$to ){
            return redirect()->back()->withErrors('Amount is not in the Package Range, Check the Amount You are Depositing');
        }else{
        $investor_photo = request()->profile_photo_path;
        $investor_photo_original_name = $investor_photo->getClientOriginalName();
        $investor_photo->move('users_photo/',$investor_photo_original_name);

        $deposit_package_amount =new Investor;
        $deposit_package_amount->district_id =request()->district_id;
        $deposit_package_amount->package_id =request()->package_id;
        $deposit_package_amount->amount_deposited =request()->amount_deposited;
        $deposit_package_amount->period =request()->period;
        $deposit_package_amount->state =request()->state;
        $deposit_package_amount->contact =request()->contact;
        $deposit_package_amount->bought_by =Auth::user()->id;
        $deposit_package_amount->save();

        //This saves profile photo in users table
         User::where('id',auth()->user()->id)->update(array('profile_photo_path' =>$investor_photo_original_name));

        return redirect('/investors/my-package')->with('msg','Operation Successful');
    }
    }

    /* This function validates the investor details created
    */
   protected function validatecreatePackage(){
       if(empty(request()->amount_deposited)){
           return redirect()->back()->withErrors('Enter Amount to proceed');
       }elseif(empty(request()->period)){
           return redirect()->back()->withErrors('Enter Period to proceed');
       }elseif(empty(request()->contact)){
           return redirect()->back()->withErrors('Enter Contact to proceed');
       }else{
           return $this->createPackage();
       }
    }

    /**
     * This function shows the package details for logged in investor.
     */
    protected function myPackageInformation()
    {
        return view('investors::my_package');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('investors::edit');
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
