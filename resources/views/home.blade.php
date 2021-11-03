@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row gy-3">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card">
                    <div class="card-header">{{$movie->title}}</div>
                    <div class="card-body">
                        <h6 class="card-title">{{$movie->original_title}}</h6>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <p class="card-text">{{$movie->vote}}</p>
                        <p class="card-text"><small class="text-muted">{{$movie->date}}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
    
@endsection