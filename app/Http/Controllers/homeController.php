<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view ("index");
    }
    public function temptrongloai($idTemp, $pageNum=1){
        $kq = DB::table("template")
        ->select('id_temp', 'name', 'image')
        ->join('template_type', 'template.id_type', '=', 'template_type.id_type')
        ->where("template.id_type", $idType)
        ->where("template.Anhien",1)
        ->paginate(5);
    
        $nameType = DB::table("template_type")
        ->where("id_type", $idType)
        ->value("name_type");
        $idType = DB::table("template_type")
        ->where("id_type", $idType)
        ->value("id_type");
        $data = ['listemp'=>$kq, 'id_type'=>$idType, 'name'=>$nameType];
        return view("temptrongloai", $data); 
    }
}
