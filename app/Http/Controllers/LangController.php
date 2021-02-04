<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class LangController extends Controller
{
    public function changeEs()
    {
        App::setlocale('es');
        Session::put('locale', 'es');
        return view('welcome');
    }

    public function changeEn()
    {
        App::setlocale('en');
        Session::put('locale', 'en');
        return view('welcome');

    }
}
