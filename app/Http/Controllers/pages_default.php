<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages_default extends Controller
{
    function homepage(){
        return view("pages_default/home");
    }
    function aboutUs(){
        return view("pages_default/about-us");
    }
}
