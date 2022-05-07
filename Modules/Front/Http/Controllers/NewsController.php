<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('front::news');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createNews(Request $request)
    {
        $validated = $request->validate([
            'title'     => 'required | max:255',
            'content'   => 'required | max:255',
            'image'     => 'required | max:255',
            'user_id'   => '',
        ]);
        $news_image = request()->image;
        $news_image_original_name = $news_image->getClientOriginalName();
        $news_image->move('news_images/',$news_image_original_name);

        $news_obj =new News;
        $news_obj ->title     =request()->title;
        $news_obj ->content   =request()->content;
        $news_obj ->image     =$news_image_original_name;
        $news_obj->user_id    =auth()->user()->id;
        $news_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function editNews($news_id)
    {
        $edit_news =News::where('id',$news_id)->get();
        return view('front::edit_news',compact('edit_news'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateNews($news_id)
    {
        News::where('id',$news_id)->update(array(
            'title'   =>request()->title,
            'content' =>request()->content,
            'user_id' =>auth()->user()->id
        ));
        return redirect('/front/get-news')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteNews($news_id)
    {
        News::where('id',$news_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
