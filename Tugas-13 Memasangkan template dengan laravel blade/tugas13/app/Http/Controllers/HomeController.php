<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function utama()
    {
        return view('home');
    }
    public function dt()
    {
        return view('datatable');
    }
   

  
}
