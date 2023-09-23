@extends("layouts.app")
@section('content')
<article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>{{$single->body}}</p>
                       
                        <p>
                            Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>
                            &middot; Images by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                        </p>
                    </div>
                </div>
            </div>
          
        </article>
            <a href="{{route('delete.post', $single->id)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>
            <a href="{{route('edit.post', $single->id)}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">update</a>


@endsection        