<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TemptheoloaiController extends Controller
{
    //action temp theo loại:
    // public function temptheoloai($id_type){
    //     $kq = DB::table("template")
    //         ->select('id_temp', 'name', 'image', 'path', 'size', 'Ngay', 'description', 'id_type', 'tags', 'Anhien')
    //         ->where("id_type",$id_type)->where("Anhien",1)
    //         ->offset(0)->limit(10)->get();
    //     $data = ['kq'=> $kq];
    //     return view("categories", $data);
    // }

    public function temptheoloai($id_type, $pageNum=1){
        $kq = DB::table("template")
        ->join('template_type', 'template.id_type', '=', 'template_type.id_type')
        ->where("template.id_type", $id_type)
        ->where("template.AnHien",1)
        ->paginate(6);
    
        $TenLT = DB::table("template_type")
        ->where("id_type", $id_type)
        ->value("name_type");
        
        $idLT = DB::table("template_type")
        ->where("id_type", $id_type)
        ->value("id_type");

     

        // $data = ['listtemplate'=>$kq, 'idTL' => $idTL, 'TenTL' =>$TenTL, 'id_type'=>$id_type, 'Ten'=>$TenLT ,'TenLT'=>$TenLT ];
        // return view("templatetrongloai", $data); 

        $data = ['kq'=> $kq,'idLT'=>$idLT,'TenLT'=>$TenLT];
        return view("categories", $data);
        
    }

}
