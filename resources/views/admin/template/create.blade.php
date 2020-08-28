@extends('admin.layoutadmin')
@section('pagetitle', 'THÊM TEMPLATE MỚI') 
@section('main')
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif

<form method="post" action="{{ route('template.store') }}" >
    {{ csrf_field()}}
    asd
</form>
@endsection
