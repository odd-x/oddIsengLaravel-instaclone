@extends('layouts.app')

@section('content')
<div class="container" style="border :1px color ">
    <div class="row">
        <div class="col-3">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle ; p-5 ; w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2">
                    <div class="h4">{{$user->username}}</div>

                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>

                </div>
                @can('update', $user->profile)
                <a href="/p/create">add new post</a>
                @endcan

            </div>

            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"> <strong>{{$user->posts->count()}}</strong> POST</div>
                <div class="pr-5"> <strong>{{$user->profile->followers->count()}}</strong> FLWR</div>
                <div class="pr-5"> <strong>{{$user->following->count()}}</strong> FLING</div> 
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? '' }}</a></div>
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
