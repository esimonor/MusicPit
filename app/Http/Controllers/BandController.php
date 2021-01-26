<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bands;

class BandController extends Controller
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
        /*request()->validate([
            'name'=> 'required',
            'music' => 'required',
            'description' => 'required',
        ]);*/

        $band = new Bands;

        $file=$request->file('image');

        $nombre=time().$file->getClientOriginalName();
        $file->move(public_path().'/images',$nombre);
        $band->media = "/images"."/".$nombre;


        $band->name = $request->input('name');
        $band->members = $request->input('member');
        $band->music = $request->input('music');
        $band->description = $request->input('banddescription');

        $band->save();
        return redirect('/bands/all')->with('success', 'Data saved');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $band = Bands::find($id);
        $band->delete();

        return redirect('bands/all')->with('success', 'Band deleted!');
    }
}
