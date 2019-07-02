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
<h3>Danh Sach Loai</h3>
<a href="{{route('backend.loai.create')}}" class="btn btn-success">&nbsp;Them&nbsp;</a>
<table class="table">
    <thead>
        <tr>
            <th style="color:red">So Thu Tu</th>
            <th style="color:red">Ma Loai</th>
            <th style="color:red">Ten Loai</th>
            <th style="color:red">Update</th>
            <th style="color:red">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($loai as $list)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $list->l_ma }}</td>
                <td>{{ $list->l_ten }}</td>
                <td>
                    <a href="{{ route('backend.loai.edit',['$id' => $list->l_ma]) }}" class="btn btn-info">&nbsp;Sua&nbsp;</a>
                </td>
                <td>
                    <form method="post" action="{{route('backend.loai.delete',['id'=>$list->l_ma])}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">&nbsp;Xoa&nbsp;</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection