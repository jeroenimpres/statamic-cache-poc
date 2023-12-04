@extends('layout')

@section('content')
    Hi there,
    @include('dynamic/_random_name') 👋
    <br>
    <i>(Blade, with include tag)</i>
    <br>
    As this path /customviews/* is in the exclude, the above name should change.
    <br>
    This is {{ $title }}
@endsection
