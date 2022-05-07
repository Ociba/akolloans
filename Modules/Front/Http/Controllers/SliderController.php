<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('front::slider');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createSlider(Request $request)
    {
        $validated = $request->validate([
            'image'     => 'required | max:255',
            'body'      => 'required | max:255',
            'title'     => 'required | max:255',
            'user_id'   => '',
        ]);
        $slider_image = request()->image;
        $slider_image_original_name = $slider_image->getClientOriginalName();
        $slider_image->move('slider_images/',$slider_image_original_name);

        $slide_obj =new Slider;
        $slide_obj ->title  =request()->title;
        $slide_obj ->body   =request()->body;
        $slide_obj ->image  =$slider_image_original_name;
        $slide_obj->user_id =auth()->user()->id;
        $slide_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }
    /**
     * This function gets form for editing slider informations
     */
    public function editSlider($lider_id)
    {
        $edit_slider_info =Slider::where('id',$lider_id)->get();
        return view('front::edit_slider',compact('edit_slider_info'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateSlider($lider_id)
    {
        Slider::where('id',$slider_id)->update(array(
            'title'   =>request()->title,
            'body'    =>request()->body,
            'user_id' =>auth()->user()->id
        ));
        return redirect('/front/get-slider')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteSlider($slider_id)
    {
        Slider::where('id',$slider_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
