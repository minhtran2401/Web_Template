<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TemptheoloaiController extends Controller
{
    public function temptheoloai($id_type){
        $kq = DB::table("template")
            ->where("id_type",$id_type)
            ->where("Anhien",1)
            ->offset(0)->paginate(6);
    
        $Ten_typetemp = DB::table("template_type")
        ->where("id_type", $id_type)
        ->value("name_type");

        $data = ['kq'=> $kq,'Ten_typetemp'=> $Ten_typetemp];
        return view("categories", $data);
    }

}
