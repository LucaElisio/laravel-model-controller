@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Movies list</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <img class="w-25" src="{{$movie->image}}" alt="">
                    <h4>{{$movie->title}}</h4>
                    <p>{{$movie->vote}}</p>
                </li>
            @endforeach

        </ul>
    </div>
@endsection