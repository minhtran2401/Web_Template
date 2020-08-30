@extends('admin.layoutadmin')
@section('pagetitle', "THÊM LOẠI TEMPLATE MỚI")
@section('main')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <!------------------->
            @if(session()->get('success'))
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Thông báo!</h4>
              {{ session()->get('success') }}
            </div>
            @endif
            @if(session()->get('successx'))
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Thông báo!</h4>
              {{ session()->get('successx') }}
            </div>
            @endif
            @if(session()->get('status'))
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Thông báo!</h4>
              {{ session()->get('status') }}
            </div>
            @endif
            <!------------------->
          </div>
        </div>
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
                            {{-- {{csrf_field()}}
                            {!! method_field('delete') !!} --}}
                         <button style="border: 0"style="border: 0"  > <a href=""  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                        </form>                             
                        <form class="form-check-inline" action="{{route('temp_typeBE.destroy', $row->id_type)}}" method="POST">
                                {{csrf_field()}}
                                {!! method_field('delete') !!}
                             <button class="btn btn-icon btn-danger" style="border: 0" onclick="return confirm('Xóa hả ?');" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
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


