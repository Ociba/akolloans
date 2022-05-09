<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * This function gets news page
     */
    protected function getNews(){
        return view('frontPages.news');
    }
}
