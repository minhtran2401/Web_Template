<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TemptheoloaiController extends Controller
{
    public function temptheoloai($id_type, $pageNum=1){
        $kq = DB::table("template")
        ->join('template_type', 'template.id_type', '=', 'template_type.id_type')
        ->where("template.id_type", $id_type)
        ->where("template.AnHien",1)
        ->paginate(6);
    
        $Ten_typetemp = DB::table("template_type")
        ->where("id_type", $id_type)
        ->value("name_type");

        $data = ['kq'=> $kq,'Ten_typetemp'=>$Ten_typetemp];
        return view("categories", $data);
    }

}
