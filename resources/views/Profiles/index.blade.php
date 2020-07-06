@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://picsum.photos/536/354" class="rounded-circle" style="width:100%"></div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user ->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>120</strong> posts</div>
                <div class="pr-5"><strong>12k</strong> followers</div>
                <div class="pr-5"><strong>222</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
            </div>
            <div> <a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
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
