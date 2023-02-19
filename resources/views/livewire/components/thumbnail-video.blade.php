@if($path)
    <div class="col-lg-2">
        <img src="{{asset('storage/'. $path)}}" alt="..." class="img-thumbnail">
    </div>
@else
    <div class="col-lg-2">
        <div class="imgplace"></div>
    </div>
@endif
