<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * This function gets news page
     */
    protected function getNews(){
        $get_news =News::latest()->get();
        return view('frontPages.news',compact('get_news'));
    }
}
