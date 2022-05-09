<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * This function gets contact page
     */
    protected function getContact(){
        return view('frontPages.contact');
    }
}
