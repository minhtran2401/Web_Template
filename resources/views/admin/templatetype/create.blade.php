@extends('admin.layoutadmin')
@section('pagetitle', "THÊM LOẠI MỚI")
@section('main')
    <section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>LOẠI TEMPLATE</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../admin"><i class="zmdi zmdi-home"></i> MiNhaTi</a></li>
                        <li class="breadcrumb-item active">THÊM LOẠI MỚI</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
          
               
            <div class="body">
                <form id="form_validation" method="post" action="{{route('temp_typeBE.store')}}" >
                    {{csrf_field()}}
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Tên Loại" name="name_type" required>
                    </div>
                  
                    <div class="form-group">
                        <div class="radio inlineblock m-r-20">
                            <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1" checked="" >
                            <label for="Hien">Hiện</label>
                        </div>                                
                        <div class="radio inlineblock">
                            <input type="radio" name="Anhien" id="An" class="with-gap" value="0" >
                            <label for="An">Ẩn</label>
                        </div>
                    </div>

                    <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>

                
            </div>
        </div>
    </div>
</section>
@endsection


