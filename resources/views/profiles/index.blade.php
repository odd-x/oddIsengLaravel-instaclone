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
                <a href="http://">add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5">  <strong>123</strong> POST</div>
                <div class="pr-5">  <strong>234</strong> FLWR</div>
                <div class="pr-5">  <strong>345</strong> FLING</div>                
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? 'null' }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fcgk13-1.fna.fbcdn.net/vp/488b09b2fc9f96e83e50d4421ff3aa38/5DAA4B6D/t51.2885-15/e35/s150x150/60168847_363582637620123_1792829997459978591_n.jpg?_nc_ht=instagram.fcgk13-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk13-1.fna.fbcdn.net/vp/ab7c4b81b0569ceb2ca6e410214a8fbc/5DA29B62/t51.2885-15/e35/s480x480/60818505_432227734277201_1452617946156268308_n.jpg?_nc_ht=instagram.fcgk13-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk13-1.fna.fbcdn.net/vp/42a9b7f565cac6fc18c4ba535fcba08f/5DA513B8/t51.2885-15/sh0.08/e35/s640x640/60158531_391318421725957_4638441867182494484_n.jpg?_nc_ht=instagram.fcgk13-1.fna.fbcdn.net" class="w-100">
        </div>
    </div>
</div>
@endsection
