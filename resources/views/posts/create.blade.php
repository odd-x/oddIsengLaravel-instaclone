@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-8 offset-2"> 

        <div class="row">
            <h1>Add New Post</h1>
        </div>
        
        <form action="/p" enctype="multipart/form-data" method="POST">
            @csrf 
            <!-- capt !-->
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label text-md-right">Caption</label>
                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control 
                    
                        @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required
                        autocomplete="caption" autofocus>
                    @error('caption')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row ">
                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                <div class="col-md-6">
                    <input id="image" type="file" class="form-control-file 
                        
                            @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required
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
                    <button type="submit" class="btn btn-success" style="float:right">Submit</button>
                </div>
            </div>



        </form>


    </div>


    </div>



</div>
@endsection
