@extends('admin.layoutadmin')
@section('pagetitle', "THÊM LOẠI TEMPLATE MỚI")
@section('main')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH LOẠI TEMPLATE</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Tên </th>
                        <th>Trạng Thái</th>
                        <th>Quản Lí</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->id_type}}
                        </td>
                        <td>
                        <div>{{$row->name_type}}</div>
                        </td>
                  
                        <td>
                            <div> {{ $row->Anhien==1? "Đang hiện " : "Đang ẩn"}}</div> 
                        </td>
                       
                  
                        
                        <td >
                             
                             
                          <form class="form-check-inline" action="{{route('temp_typeBE.destroy', $row->id_type)}}" method="post">
                            {{csrf_field()}}
                            {!! method_field('delete') !!}
                         <button style="border: 0"style="border: 0"  > <a href=""  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                        </form>                             
                        <form class="form-check-inline" action="{{route('temp_typeBE.destroy', $row->id_type)}}" method="post">
                                {{csrf_field()}}
                                {!! method_field('delete') !!}
                             <button style="border: 0" onclick="return confirm('Xóa hả ?');" > <a href=""  title="Xóa" class="btn btn-icon btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a></button>
                        </form>
                          
                      </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection


