@php
    $arrayArticoli = config('articoli');
@endphp

@extends('layouts.layout')

@section('titolo')
    Articoli
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($arrayArticoli as $key => $articolo)
                <div class="col-4">
                    <div class="articolo card">
                        <img src="{{$articolo['avatar']}}" alt="avatar">
                        <h1>Nome Autore: {{$articolo['nomeAutore']}}</h1>
                        <div class="articolo-info">
                            <h2> <a href="{{route('articolo.show', $key)}}">Titolo: {{$articolo['titolo']}}</a> </h2>
                            <p>{{$articolo['descrizione']}}</p>
                            <small>{{$articolo['data']}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
