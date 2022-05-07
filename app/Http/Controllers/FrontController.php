<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    protected function frontPage(){
    $get_services =DB::table('services')->get();
    $clients      =$this->countClients();
    $districts    =$this->countDistricts();
    $users        =$this->countUsers();
    $mesages      =DB::table('happy_clients')->limit(3)->latest()->get();
    $news         =DB::table('news')->limit(3)->latest()->get();
    return view('welcome',compact('get_services','clients','districts','users','mesages','news'));
    }
    /**
     * This function counts clients
     */
    private function countClients(){
        return DB::table('clients')->count();
    }
      /**
     * This function counts districts covered
     */
    private function countDistricts(){
        return DB::table('districts')->count();
    }
      /**
     * This function counts clients
     */
    private function countUsers(){
        return DB::table('users')->count();
    }
}
