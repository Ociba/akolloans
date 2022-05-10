<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    /**
    * This function gets about page
    */
    protected function getAbout(){
        $get_news =DB::table('news')->limit(4)->latest()->get();
        return view('frontPages.about',compact('get_news'));
    }
}
