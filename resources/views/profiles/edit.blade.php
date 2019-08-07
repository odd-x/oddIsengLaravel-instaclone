@extends('layouts.app')

@section('content')
<div class="container" style="border :1px color ">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @method('PATCH')
        @csrf
        <div class="row col-md-8 offset-2">
            <h1>Edit Profile</h1>

        </div>
        <!-- title !-->
        <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control                         
                            @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}"
                        required autocomplete="title" autofocus>
                    @error('title')
    
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
    
        <!-- description !-->
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
            <div class="col-md-6">
                <input id="description" type="text" class="form-control 
                    
                        @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description}}"
                    required autocomplete="description" autofocus>
                @error('description')

                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <!-- url !-->
        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label text-md-right">URL</label>
            <div class="col-md-6">
                <input id="url" type="text" class="form-control 
                        
                            @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required
                    autocomplete="url" autofocus>
                @error('url')

                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row ">
            <label for="image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
            <div class="col-md-6">
                <input id="image" type="file" class="form-control-file 
                        
                            @error('image') is-invalid
                            @enderror " name="image" value="{{ old('image') }}"
                            autocomplete="image" autofocus>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-10">
                <button type="submit" class="btn btn-success" style="float:right">Save Profile</button>
            </div>
        </div>
    </form>
</div>
@endsection
