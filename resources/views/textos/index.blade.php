@extends('layouts.master')

@section('content')
    @foreach($all_text as $text)
        {{  $text->titulo }}
        <br>
    @endforeach
@endsection
