<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view ("index");
    }
    public function temphome($id_type){
        $gettemp = DB::table("template_type")
        ->where("id_temp",$id)
        -> join('template_type','template.id_type', '=', 'template_type.id_type')
        -> where('template.AnHien', '=', '1')
        
            ->offset(0)->limit(10)->get();
        $data = ['gettemp'=> $gettemp];
        return view("tempmoitheoloai", $data);
    }
}
