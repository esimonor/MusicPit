<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:3|max:15',
            'email'=> 'required',
            'password' => 'required',
            'secpassword' => 'required',
            'instrument' => 'required',
            'music' => 'required',

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $instrument = $request->input('instrument');
        $music = $request->input('music');

        if($instrument == "Any" && $music == "Any"){
            $users = \App\Models\User::all();
            return view('finder', ['users'=>$users]);
        }
        if($instrument == "" && $music == ""){
            $users = \App\Models\User::all();
            return view('finder', ['users'=>$users]);
        }

        if($instrument != "Any" && $music != "Any"){
            $users=\App\Models\User::get()->where('instrument',$instrument)->where('music',$music);
        }elseif(!empty($instrument) && $music=="Any"){
            $users=\App\Models\User::get()->where('instrument',$instrument);
        }elseif($instrument=="Any" && !empty($music)){
            $users=\App\Models\User::get()->where('music',$music);
        }
        //$users=\App\Models\User::get()->where('instrument',$instrument)->where('music',$music);
        return view('finder', ['users'=>$users]);
    }

    // User profile
    public function showProfile($id)
    {
        $users = User::get()->where('id', $id);
        return view('profiles', ['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // Coge el archivo enviado
        $file=$request->file('archivo');
        // detectar si hay archivo o no
        if($file != ""){
            // Se le da un nombre distinto para que no haya nombres repetidos y confictos
            $name=time().$file->getClientOriginalName();
            // Se mueve a la carpeta public/img
            $file->move(public_path().'/video',$name);
            // Se especifica la ruta y se guarda en la base de datos
            $user->archivo = "/video"."/".$name;
        }

        $audio=$request->file('audio');
        if($audio != ""){
            $nombre=time().$audio->getClientOriginalName();
            $audio->move(public_path().'/audio',$nombre);
            $user->audio = "/audio"."/".$nombre;
        }

        $profile=$request->file('profilePhoto');
        if($profile != ""){
            $nombre=time().$profile->getClientOriginalName();
            $profile->move(public_path().'/images',$nombre);
            $user->profile_photo_path = "/images"."/".$nombre;
        }

        $user->name = $request->input('nombre');
        $user->email = $request->input('email');
        $user->localization = $request->input('localization');
        $user->instrument = $request->input('instrument');
        $user->music = $request->input('music');
        $user->description = $request->input('description');


        // Lo guarda
        $user->save();
        return redirect('/user/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/')->with('success', 'User deleted!');
    }


}
