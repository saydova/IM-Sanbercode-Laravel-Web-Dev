<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function reg()
    {
        return view('halaman.register');
    }
    public function wel()
    {
        return view('halaman.welcome');
    }
    public function kirim(request $request)
    {
        $name = $request['name'];
        return view('halaman.welcome', ['name'=>$name]);
    }
}

