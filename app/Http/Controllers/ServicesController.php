<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * This function gets services front pages
     */
    protected function getServices(){
        return view('frontPages.services');
    }
}
