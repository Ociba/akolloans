<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\HappyClients;

class ClientSayController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('front::clients_say');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createClientSay(Request $request)
    {
        $validated = $request->validate([
            'clients_name'     => 'required | unique:happy_clients',
            'clients_photo'    => 'required | max:5000',
            'clients_say'      => 'required | max:255',
            'user_id'   => '',
        ]);
        $client_image = request()->clients_photo;
        $client_image_original_name = $client_image->getClientOriginalName();
        $client_image->move('happy_clients_images/',$client_image_original_name);

        $happy_lients_obj =new HappyClients;
        $happy_lients_obj ->clients_name   =request()->clients_name;
        $happy_lients_obj ->clients_say    =request()->clients_say;
        $happy_lients_obj ->clients_photo  =$client_image_original_name;
        $happy_lients_obj->user_id =auth()->user()->id;
        $happy_lients_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function editInfo($client_id)
    {
        $edit_client_info =HappyClients::where('id',$client_id)->get();
        return view('front::edit_client',compact('edit_client_info'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateInfo($client_id)
    {
        HappyClients::where('id',$client_id)->update(array(
            'clients_name' =>request()->clients_name,
            'clients_say'  =>request()->clients_say,
            'user_id' =>auth()->user()->id
        ));
        return redirect('/front/get-happy-clients')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteClient($client_id)
    {
        HappyClients::where('id',$client_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
