<form method="post" action="{{route('backend.loai.update',['$id'=>$loaicantim->l_ma])}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    Ten Loai: <input type="text" name="tenloai" value="{{ $loaicantim->l_ten}}" />
    <button>Save</button>
</form>
