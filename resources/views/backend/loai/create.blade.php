@extends('backend.layout.master')

@section('title')
Sunshine | Trang Chu
@endsection

@section('custom_script')
<script>
alert('Trang Chu');
</script>
@endsection

@section('content')
<form method="post" action="{{route('backend.loai.store')}}">
    {{csrf_field()}}
    Ten Loai: <input type="text" name="tenloai" class="form-control" id="them" placeholder="Nhap Ten Loai" />
    <button class="btn btn-primary" style="margin-top:.5%;">Save</button>
</form>
@endsection