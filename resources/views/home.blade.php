@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img src="/logo/peaceit.jpeg" style="height: 200px; width: 200px; border-radius: 50%"></div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
                <a href="">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>213</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title}}</div>
            <div>{{ $user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="/logo/desh.jpg" class="w-100"></div>
        <div class="col-4"><img src="/logo/kollol.jpg" class="w-100"></div>
        <div class="col-4"><img src="/logo/rahulOrJoy.jpg" class="w-100"></div>
    </div>
</div>
@endsection