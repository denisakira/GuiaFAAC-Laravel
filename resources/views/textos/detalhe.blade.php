@extends('layouts.master')

@section('content')
    <h1>
        {{ $texto->first()->titulo }}
    </h1>
    <br>
    <p>
        {!! nl2br(e($texto->first()->texto)) !!}

    </p>

@endsection
