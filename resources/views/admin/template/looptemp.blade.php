
           
@extends('admin.layoutadmin')

@section('pagetitle', 'DANH SÁCH TEMPLATE ')
@section('main')
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>DANH SÁCH TEMPLATE</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Tên /<br> Loại </th>
                            <th>Đường dẫn /<br> Kích thước </th>
                            <th>Thẻ Tag / <br> Ngày Đăng</th>
                            <th>Lượt Tải / <br> Lượt Xem</th>
                            <th>Hình Ảnh</th>
                            <th>Quản Lí</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($ds as $row)
                          <tr>
                            <td>
                              <div> {{ $row->id_temp}} </div> 
                               <div> {{ $row->Anhien==1? "Đang hiện " : "Đang ẩn"}}</div> 

                            </td>
                            <td>
                            <div>{{$row->name}}</div>
                            <div>
                                @php
                                $id_type =$row->id_type;
                                $tl = App\temp_typeBE::find($id_type);
                                echo $tl->name_type;
                            @endphp</h5></div>
                      
                            </div>
                        </td>
                            <td class="align-middle">
                              <div>
                                <div>{{$row->path}}</div>
                                    <div> {{$row->size}} </div>
                              </div>
                            </td>
                            <td>
                                <div> {{$row->tags}} </div>
                                <div>{{$row->Ngay->format('d-m-Y')}}</div>
                            </td>
                            <td>
                                <div> {{$row->luottai}} Lượt </div>
                                <div> {{$row->luotxem}} Lượt</div>
                            </td>
                            <td>
                                <img alt="image" src=" {{asset('cssadmin')}}/assets/upload/product/{{$row->image}}" width="50">
                            </td>
                            <td><a href="#" class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i> Sửa</a>
                                <a href="#" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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