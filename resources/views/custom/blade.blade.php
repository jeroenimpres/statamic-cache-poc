@extends('layout')

@section('content')
    Hi there,
    @include('dynamic/_random_name') 👋
    <br>
    <i>(Blade, with include tag)</i>
    <br>
    @if(str_contains($current_url, 'customviews'))
        As this path /customviews* is in the exclude, the above name should change.
    @else
        We are on a path that is not excluded, so the above name should not change.
    @endif
    <br>
    This is {{ $title }}
@endsection
