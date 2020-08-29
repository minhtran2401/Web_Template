
           
@extends('admin.layoutadmin')

@section('pagetitle', 'DANH SÁCH TEMPLATE ')
@section('main')
<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>  DANH SÁCH TEMPLATE  </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> MiNhaTi</a></li>
                        <li class="breadcrumb-item active">DANH SÁCH TEMPLATE</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <table id="db1" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
              <tr>
                <th class="cell-small text-center" >idTemp <br> Ngày Upload </th>
                <th class="hidden-xs hidden-sm text-center">Tên / Đường Dẫn <br> Kích Thước </th>
                <th class="hidden-xs hidden-sm text-center">Loại Temp <br> Tags / Trạng Thái</th>
                <th class="hidden-xs hidden-sm text-center">Mô Tả </th>
                <th class="hidden-xs hidden-sm text-center">Ảnh </th>
                <th class="cell-small text-center"  >Chỉnh/Xóa </th>
               
              </tr>
            </thead>
                
            <tbody>
            @foreach ($ds as $row)
            
              <tr>
                <td class="cell-small text-center" >
                    <div>idTemp: <span class="text-danger" > {{ $row->id_temp}}</span></div>
                    <div>{{$row->Ngay->format('d/m/Y')}}</div>
                    <div>Lượt Xem: {{$row->luotxem}}</div>
                    <div>Lượt Tải: {{$row->luottai}}</div>

                   
                </td>
                <td class="hidden-xs hidden-sm text-center" >
                    <div> <span  > {{$row->name}} </span> <div> 
                    <div> <span class="text-primary" > {{$row->path}} </span> </div> 
                    <div>{{$row->size}} </div> 


                   
                </td>
                <td class="hidden-xs hidden-sm text-center">
                    <div class="tt" > <h5>
                  @php
                      $id_type =$row->id_type;
                      $tl = App\templateBE::find($id_type);
                      echo $tl->name_type;
                  @endphp</h5></div>
            
                  <div class="lt" >
                    
                        <div>{{$row->tags}} </div> 
                        <div class="anhien">{{ ($row->Anhien==1)? "Đang hiện":" Đang ẩn " }}</div> 

                    
                  </div>
                </td>
                <td class="hidden-xs hidden-sm text-center">
                  <div class="anhien" style="font-size: 0.5rem"> {{ ($row->description)}}</div> 
               
                </td>
                <td class="hidden-xs hidden-sm text-center">
                    
                        <img class="img-thumbnail" width="100px" height="100px" src="assets/images/work/{{ ($row->image)}} " alt="">
                    
            
                 
                  </td>
                <td class="cell-small text-center" >
                     
                    <form method="post" action=""> 
                        {{ csrf_field()}} {!! method_field('delete') !!}
                        <a href="" title="Sửa" class="btn btn-success"> <i class="zmdi zmdi-hc-fw"></i> </a>
                        <button onclick="return confirm('Xóa hả?'); " title="Xóa" class="btn btn-danger" type="submit"><i class="zmdi zmdi-hc-fw"></i></button>
                    </form>
                </td>
            
                
             
              </tr>
              @endforeach
            </tbody>
            </table>
            
        </div>
    </div>
</section>
@section('jsc')
<script>
    $(function(){
      $('#db1').dataTable({
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