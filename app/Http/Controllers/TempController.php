<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class TempController extends Controller
{
    public function temp($id){
        $kq = DB::table("template")
        ->where("id_temp",$id)
        -> join('template_type','template.id_type', '=', 'template_type.id_type')
        -> where('template.AnHien', '=', '1')
        ->first();
        
        $tag = DB::table("tags")
            ->where("Anhien", "=", "1")
            ->get();
        

        $loaitemp = DB::table("template_type")
        -> join('template','template.id_type', '=', 'template_type.id_type') 
            ->where("template_type.Anhien", "=", "1")
            ->get();
     
        
        $countloai = DB::table("template_type")
        ->join('template','template.id_type', '=', 'template_type.id_type')
        ->count();


        // $idLT = DB::table('loaitin')
        // ->where("idLT",'=',$kq->idLT)
        // ->value('idLT');

        // $tcl = DB::table("tin")
        // ->select('idTin', 'TieuDe', 'urlHinh', 'Ngay', 'Ten', 'TomTat', 'idUser')
        // -> join('loaitin','tin.idLT', '=', 'loaitin.idLT')
        // ->where('tin.idLT','=',$idLT)
        // ->get();

        // $ykien = DB::table("ykien")->where("idTin",$id)
        // ->where ("AnHien", 1)
        // ->get();
        
        $data = ['template'=>$kq, 'tags'=>$tag, "loaitemp"=>$loaitemp, "countloai"=>$countloai];
        return view("temp",$data);
    }
}
