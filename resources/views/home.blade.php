@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-12 col-md-6 col-lg-2 mb-4">
                <div class="card">
                    <img src="{{$movie->image}}" class="card-img-top" alt="Movie">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

</main>

@endsection