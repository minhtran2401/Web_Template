<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\temp_typeBE;
class Template_typeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = temp_typeBE::all();
        return view('admin.templatetype.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.templatetype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lt = new temp_typeBE([
            'name_type' => $request->get('name_type'),
            'Anhien' => $request->get('Anhien'),
        ]);
        $lt->save();
        return redirect ('/temp_typeBE')->with('success','Đã thêm loại template mới');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row =temp_typeBE::find($id);
        return view('admin.templatetype.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lt = temp_typeBE::find($id);
        if ($lt->kttemp()->get()->toArray()==null) {
            $lt->delete();
            return redirect('/temp_typeBE')->with('successx', 'Đã xóa xong loại temp vừa chọn');
        }else{
            return redirect('/temp_typeBE')->with('status', 'Không thể xóa loại temp vừa chọn do chứa temp.');
        }
    }
}
