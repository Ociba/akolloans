<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
    * This function gets about page
    */
    protected function getAbout(){
        return view('frontPages.about');
    }
}
