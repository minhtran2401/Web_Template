<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TemptheoloaiController extends Controller
{
    //action temp theo loại:
    public function temptheoloai($id_type){
        $kq = DB::table("template")
            ->select('id_temp', 'name', 'image', 'path', 'size', 'Ngay', 'description', 'id_type', 'tags', 'Anhien')
            ->where("id_type",$id_type)->where("Anhien",1)
            ->offset(0)->limit(10)->get();
        $data = ['kq'=> $kq];
        return view("categories", $data);
    }
}
