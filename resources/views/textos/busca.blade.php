@extends('layouts.master')

@section('content')
    @if(isset($resultado))
        <h2>Resultados:</h2>
        <br>
        @foreach($resultado as $res)
            <a href="{{ $res->nome }}">{{ $res->titulo }}</a>
            <br>
            <br>
        @endforeach
    @else
        <h2>Nada encontrado</h2>
    @endif
@endsection
