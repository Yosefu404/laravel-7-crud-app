@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://pixabay.com/get/53e2d7474e57aa14f6da8c7dda79357d133edae44e507440762f7ed49e45c7_1280.jpg" class="rounded-circle" style="width:100%"></div>
    </div>
    <div class="col-9 pt-5">
        <div>
            <h1>Name</h1>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>120</strong> posts</div>
            <div class="pr-5"><strong>12k</strong> followers</div>
            <div class="pr-5"><strong>222</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">http://example.com</div>
        <div>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
        </div>
        <div> <a href="#">http://example.com</a></div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://picsum.photos/536/352" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/536/354" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/536/353" class="w-100">
        </div>
    </div>
</div>
@endsection
