<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UploadController extends Controller
{
    public function subirArchivo(Request $request){
        $request->file('archivo')->store('public');
        dd("subido y guardado");
        }
   }


