<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view ("index");
    }

    public function blankpage(){
        return view ("blankpage");
    }
    public function homepage(){
        return view ("homepage");
    }
}
