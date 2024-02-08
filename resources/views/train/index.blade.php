<!-- riempie il file app contenuto nella cartella layouts con quello scritto all'interno di section -->
@extends('layouts.app')

@section('main-content')
<main class="bg-dark-subtle">
    <h1 class="text-center">Imaginary Train Station </h1>
    @foreach ( $trains as $train )
    <article class="card col-sm-3 mx-auto m-3 p-3 bg-info-subtle">
        <p class="card-text"><span class="fw-bold">Train Company: </span>{{ $train->company }}</p>
        <p class="card-text"><span class="fw-bold">Departure Station: </span>{{ $train->departure_station }}</p>
        <p class="card-text"><span class="fw-bold">Arrival Station: </span>{{ $train->arrival_station }}</p>
        <p class="card-text"><span class="fw-bold">Departure Time: </span>{{ $train->departure_time }}</p>
        <p class="card-text"><span class="fw-bold">Arrival Time: </span>{{ $train->arrival_time }}</p>
        <p class="card-text"><span class="fw-bold">Train Company: </span>{{ $train->company }}</p>
    </article>
    @endforeach
</main>
@endsection 
