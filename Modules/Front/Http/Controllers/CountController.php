<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Message;

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('front::message');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createMessage(Request $request)
    {
        $validated = $request->validate([
            'investor_name'    => 'required | max:255',
            'investor_email'   => 'required | unique:messages',
            'message'          => 'required | max:255',
        ]);

        $message_obj =new Message;
        $message_obj ->investor_name    =request()->investor_name;
        $message_obj ->investor_email   =request()->investor_email;
        $message_obj ->message          =request()->message;
        $message_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
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
    public function show($id)
    {
        return view('front::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('front::edit');
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
    public function deleteMessage($message_id)
    {
        Message::where('id',$message_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
