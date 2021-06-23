@extends('layouts.main')

@section('content')

    <div class="container d-flex flex-wrap justify-content-center">

        @foreach ($movies as $movie)
            <div class="card border-success m-4">
                <div class="card-header">Titolo: <strong>{{$movie['title']}}</strong> </div>
                <div class="card-body">
                <h5 class="card-title">Titolo originale: <strong>{{$movie['original_title']}}</strong> </h5>
                <h6 class="card-text">Data di uscita: <strong>{{$movie['date']}}</strong> </h6>
                <h6 class="card-text">Voto: {{$movie['vote']}}</h6>
                </div>
            </div>
            
        @endforeach

    </div>


@endsection
