@php
    $arrayArticoli = config('articoli');
    $articolo = $arrayArticoli[$id];
@endphp

@extends('layouts.layout')

@section('titolo')
    {{$articolo['titolo']}}
@endsection

@section('content')
        <div class="articolo">
            <img src="{{$articolo['avatar']}}" alt="avatar">
            <h1>Nome Autore: {{$articolo['nomeAutore']}}</h1>
            <div class="articolo-info">
                <h2>Titolo: {{$articolo['titolo']}}</h2>
                <p>{{$articolo['descrizione']}}</p>
                <small>{{$articolo['data']}}</small>
            </div>
        </div>
@endsection
