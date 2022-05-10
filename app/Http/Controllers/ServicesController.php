<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ServicesController extends Controller
{
    /**
     * This function gets services front pages
     */
    protected function getServices(){
        $services =DB::table('services')->get();
        return view('frontPages.services',compact('services'));
    }
}
