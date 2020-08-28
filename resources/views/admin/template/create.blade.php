@extends('admin.layoutadmin')
@section('pagetitle', 'THÊM TEMPLATE MỚI') 
@section('main')
{{-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif --}}

<form method="post" action=" " >
    {{ csrf_field()}}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
          <div class="form-group mg-b-20">
            <label>Tên thể loại: <span class="tx-danger">*</span></label>
            <input name="TenTL" placeholder="Nhập tên thể loại" class="form-control" required>
          </div>
          <div class="form-group mg-b-20">
            <label>Thứ tự:</label>
            <input type="number" name="ThuTu" placeholder="Nhập thứ tự" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-default">LƯU DATABASE</button>
      </div>
                
</form>
@endsection
