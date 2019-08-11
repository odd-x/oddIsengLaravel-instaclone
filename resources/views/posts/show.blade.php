@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="/storage/{{Auth::user()->profile->image}}" alt="" style="max-width:100px"
                            class="w-100 rounded-circle">
                    </div>
                    <div>
                        <div class="font-weight-bold"><a
                                href="/profile/{{Auth::user()->id}}"><span class="text-dark">{{Auth::user()->username}}</span></a></div>
                    </div>
                </div>
                <hr>
            </div>
            <p><span class="font-weight-bold"><a
                        href="/profile/{{Auth::user()->id}}"><span class="text-dark">{{Auth::user()->username}}</span></a></span> {{$post->caption}}
            </p>
        </div>
    </div>

</div>



</div>
@endsection
