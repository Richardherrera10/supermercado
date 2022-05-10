<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //

    public function index(){
        return view("welcome");
    }

    public function signup(){
        return view("signup");
    }

    public function productos(){
        return view("productos");
    }
    public function noticias(){
        return view("noticias");
    }
    public function empleos(){
        return view("empleos");
    }

}
