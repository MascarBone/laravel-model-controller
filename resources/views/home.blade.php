@extends('layouts.main')

@section('content')

<pre>
    {{-- {{var_dump($movies)}} --}}
    <h1>testing</h1>
    <h2>{{$movies[0]->title}}</h2>
</pre>
    
    
@endsection