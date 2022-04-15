<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Package;
use Auth;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function getPackages()
    {
        return view('admin::packages');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createPackage(Request $request)
    {
        $validated = $request->validate([
            'package_name'      => 'required|unique:packages',
            'from'              => 'required | max:255',
            'to'                => 'required | max:255',
            'investor_interest' => 'required | max:255',
            'client_interests'  => 'required | max:255',
            'created_by'        => '',
        ]);
        $package_obj  =new Package;
        $package_obj->package_name =request()->package_name;
        $package_obj->from =request()->from;
        $package_obj->to =request()->to;
        $package_obj->investor_interest =request()->investor_interest;
        $package_obj->client_interests =request()->client_interests;
        $package_obj->created_by =Auth::user()->id;
        $package_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }

    /**
     * This function edits packages details.
     * @return Renderable
     */
    public function editPackage(R$package_id)
    {
        $edit_package =Package::where('id',$package_id)->get();
        return view('admin::edit_package', compact('edit_package')); 
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updatePackage($package_id)
    {
        Package::where('id',$package_id)->update(array(
            'package_name'      =>request()->package_name,
            'from'              =>request()->from,
            'to'                =>request()->to,
            'investor_interest' =>request()->investor_interest,
            'client_interests'  =>request()->client_interests,
            'created_by'        =>auth()->user()->id,
        ));
        return redirect('/admin/get-packages')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deletePackage($package_id)
    {
        Package::where('id',$package_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
