@extends('layouts.master')

@section('content')
    <h1>
        {{ $all_text->first()->titulo }}
    </h1>
    <br>
    <p>
        {!! nl2br(e($all_text->first()->texto)) !!}

    </p>
@endsection
