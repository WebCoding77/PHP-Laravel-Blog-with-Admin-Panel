@extends('layouts.app')

@section('content')   
   <div class="container px-4 px-lg-5">

    <form method="POST" action="{{ route('update.post', $single->id) }}" enctype="multipart/form-data">
    <!-- Email input -->
    @csrf
    <div class="form-outline mb-4">
        <input type="text" name="title" value="{{$single->title}}" id="form2Example1" class="form-control" placeholder="title" />
    
    </div>

    <div class="form-outline mb-4">
        <input type="text" name="subtitle" value="{{$single->subtitle}}" id="form2Example1" class="form-control" placeholder="subtitle" />
    </div>

    <div class="form-outline mb-4">
        <textarea type="text" name="body" id="form2Example1" class="form-control" placeholder="body" rows="8">{{ $single->body }}</textarea>
    </div>

    
    <div class="form-outline mb-4">
            <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" />
    </div>


    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


    </form>



    </div>

@endsection    