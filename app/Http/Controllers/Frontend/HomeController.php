<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $array = array(
            'title' => 'Home',
        );

        return view('Frontend/Home/Index',$array);
    }

    public function register()
    {
        $array = array(
            'title' => 'Daftar',
        );

        return view('Frontend/Home/Register',$array);
    }
}
