<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function Comment()
    {
        return view('front::comments');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('front::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function replyComment($comment_id)
    {
        $reply_comment =Comment::where('id',$comment_id)->get();
        return view('front::reply_comment',compact('reply_comment'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function reply($comment_id)
    {
        $now =Carbon::now();
        Comment::where('id',$comment_id)->update(array(
            'reply'       =>request()->reply,
            'replied_at' =>$now,
            'user_id'    =>auth()->user()->id,
            'status'     =>'replied',
        ));
        return redirect('/front/get-comments')->with('msg','Operation Successfull');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteComment($comment_id)
    {
        Comment::where('id',$comment_id)->delete();
        return redirect()->back()->with('msg','Operation Successfull');
    }
}
