<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('front::service');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createService(Request $request)
    {
        $validated = $request->validate([
            'photo'     => 'required | max:255',
            'service'   => 'required | max:255',
            'content'   => 'required | max:255',
            'user_id'   => '',
        ]);
        $service_image = request()->photo;
        $service_image_original_name = $service_image->getClientOriginalName();
        $service_image->move('service_images/',$service_image_original_name);

        $service_obj =new Service;
        $service_obj ->service   =request()->service;
        $service_obj ->content   =request()->content;
        $service_obj ->photo  =$service_image_original_name;
        $service_obj->user_id =auth()->user()->id;
        $service_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function editService($service_id)
    {
        $edit_service =Service::where('id',$service_id)->get();
        return view('front::edit_service',compact('edit_service'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateService($service_id)
    {
        Service::where('id',$service_id)->update(array(
            'service' =>request()->service,
            'content' =>request()->content,
            'user_id' =>auth()->user()->id
        ));
        return redirect('/front/get-services')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteService($service_id)
    {
        Service::where('id',$service_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
