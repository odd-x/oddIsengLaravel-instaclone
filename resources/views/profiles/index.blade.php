@extends('layouts.app')

@section('content')
<div class="container" style="border :1px color ">
    <div class="row">
        <div class="col-3">
            <img src="https://instagram.fcgk13-1.fna.fbcdn.net/vp/b76c80d2cdd898dac1ddfa5d744cb2e7/5DC29102/t51.2885-19/s150x150/59629300_383105945646243_4225468368599121920_n.jpg?_nc_ht=instagram.fcgk13-1.fna.fbcdn.net"
                class="rounded-circle ; p-5">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">add new post</a>
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"> <strong>{{$user->posts->count()}}</strong> POST</div>
                <div class="pr-5"> <strong>{234}</strong> FLWR</div>
                <div class="pr-5"> <strong>345</strong> FLING</div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? 'null' }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->thumbnail}}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
