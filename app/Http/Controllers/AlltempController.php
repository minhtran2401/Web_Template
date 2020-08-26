<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AlltempController extends Controller
{
    // action tất cả temp:
    public function tempall(){
        $kq = DB::table("template")
            ->select('id_temp', 'name', 'image', 'path', 'size', 'Ngay', 'description', 'id_type', 'tags', 'Anhien')
            ->where("Anhien",1)
            ->offset(0)->limit(10)->get();
        $title = "Tất cả Template";
        $data = ['kq'=> $kq, 'title'=>$title];
        return view("allcategories", $data);
    }
}
