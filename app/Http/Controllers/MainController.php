<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
public function home(){
return view ('home');
}

    public function about(){
        return view ('about');
    }

    public function write(){
        return view ('write');
    }

    public function writesent(){
        return view ('thanks');
    }


    public function telegram(Request $request){
        return view ('telegram');
    }
}
