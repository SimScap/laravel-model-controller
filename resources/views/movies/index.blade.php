@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center d-flex flex-wrap justify-content-center">
                @foreach ($movies as $movie)
                    <div class="card m-1">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <h6 class="card-text">{{$movie->original_title}}</h6>
                        <h6 class="card-text">{{$movie->nationality}}</h6>
                        <h6 class="card-text">{{$movie->date}}</h6>
                        <h6 class="card-text">{{$movie->vote}}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection