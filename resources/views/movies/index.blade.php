@extends('layouts.main')

@section('title','Index')

@section('content')

<div class="container">
    <div class="row gy-3">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card">
                    <div class="card-header"><a href="{{route('movie', ['id'=>$loop->index])}}">{{$movie->title}}</a></div>
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