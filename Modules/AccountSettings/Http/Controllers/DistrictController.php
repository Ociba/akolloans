<?php

namespace Modules\AccountSettings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\District;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function getDistrict()
    {
        return view('accountsettings::districts');
    }

    /**
     * This function creates district
     */
    public function createDistrict(Request $request)
    {
        $validated = $request->validate([
            'district' => 'required|unique:districts',
        ]);
        $district_obj =new District;
        $district_obj->district=request()->district;
        $district_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }
    /**
     * This function gets edit form .
     * @param int $id
     */
    public function editDistrict($district_id)
    {
        $edit_district =District::where('id',$district_id)->get();
        return view('accountsettings::edit_district', compact('edit_district'));
    }

    /**
     * Update the specified district in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update($district_id)
    {
        District::where('id',$district_id)->update(array());
        return redirect('/accountsettings/get-districts')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified district from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteDistrict($district_id)
    {
        District::where('id',$district_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
