<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   /* public function index(){

        return view('index');
    }*/
    public function home(){

        return view('home');
    }
    public function about(){

      //  dd('ok');
        return view('pages.about');
    }
    public function regestration(){

        //  dd('ok');
        return view('pages.regestration');
    }

}
