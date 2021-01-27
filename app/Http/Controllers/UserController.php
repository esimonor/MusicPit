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
        // Get all requests in variables
        $instrument = $request->input('instrument');
        $music = $request->input('music');
        $location = $request->input('location');

        // If the variables are empry or have a value of "Any" return all the users
        if($instrument == "Any" && $music == "Any" && $location == "Any"){
            $users = \App\Models\User::all();
            return view('finder', ['users'=>$users]);
        }
        if($instrument == "" && $music == "" && $location == ""){
            $users = \App\Models\User::all();
            return view('finder', ['users'=>$users]);
        }

        // Else we check what variables have valid value to return the view

        //If instrument, music and location have value return with both values
        if($instrument != "Any" && $music != "Any" && $location != "Any"){
            $users=\App\Models\User::get()->where('instrument',$instrument)->where('music',$music)->where('localization', $location);
        } // If instrument has value return with instrument
        elseif(!empty($instrument) && $music=="Any" && $location == "Any"){
            $users=\App\Models\User::get()->where('instrument',$instrument);
        } // If music has value return with only music
        elseif($instrument=="Any" && !empty($music) && $location == "Any"){
            $users=\App\Models\User::get()->where('music',$music);
        } // If location has value return with only location
        elseif($instrument == "Any" && $music == "Any" && !empty($location)){
            $users=\App\Models\User::get()->where('localization',$location);
        } // If location and instrument have value return with both values
        elseif($instrument != "Any" && $music == "Any" && $location != "Any"){
            $users=\App\Models\User::get()->where('instrument',$instrument)->where('localization', $location);
        } // If location and music have value return with both values
        elseif($instrument == "Any" && $music != "Any" && $location != "Any"){
            $users=\App\Models\User::get()->where('music',$music)->where('localization', $location);
        } // If instrument and music have value return with both values
        elseif($instrument != "Any" && $music != "Any" && $location == "Any"){
            $users=\App\Models\User::get()->where('music',$music)->where('instrument', $instrument);
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
        $user->bandmember = $request->input('bandmember');
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
