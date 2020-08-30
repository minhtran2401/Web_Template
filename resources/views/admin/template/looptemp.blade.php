
           
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
                    <h4>Basic DataTables</h4>
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
                                {{ $row->id_temp}}
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
                                <div> {{$row->luottai}} </div>
                                <div> {{$row->luotxem}} </div>
                            </td>
                            <td>
                                <img alt="image" src=" {{asset('cssadmin')}}/assets/upload/product/{{$row->image}}" width="35">
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
@section('jsc')
<script>
    $(function(){
      $('#table').dataTable({
        responsive: true,     
        pageLength:3,       
        language: {
            "decimal":        "",
    "emptyTable":     "Không có kết quả tìm kiếm",
    "info":           "Hiển thị  _END_ trong _TOTAL_ sản phẩm",
    "infoEmpty":      "Hiển thị 0 to 0 of 0 sản phẩm",
    "infoFiltered":   "( đã lọc  trong số _MAX_  sản phẩm)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Hiển thị _MENU_ sản phẩm",
    
    "loadingRecords": "Đang tải...",
    "processing":     " Đang xử lí ...",
    "search":         "Tìm kiếm:",
    "zeroRecords":    "Không tìm thấy kết quả",
    "paginate": {
        "first":      "Trước",
        "last":       "Sau",
        "next":       "Sau",
        "previous":   "Trước"
    },
    "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
    }
        }
      });
    });
</script>
@endsection
@endsection