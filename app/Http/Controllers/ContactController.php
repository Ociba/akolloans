<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ContactController extends Controller
{
    /**
     * This function gets contact page
     */
    protected function getContact(){
        $get_comments =Comment::where('status','replied')->limit(2)->latest()->get();
        return view('frontPages.contact',compact('get_comments'));
    }
    /**
     * This function creates comment
     */
    protected function sendComment(Request $request){
        $validated = $request->validate([
            'names'     => 'required | max:255',
            'comment'   => 'required | max:255',
        ]);
       $comment_obj =new Comment;
       $comment_obj->names   =request()->names;
       $comment_obj->comment =request()->comment;
       $comment_obj->save();
       return redirect()->back()->with('msg','Operation Successful');
    }
}
