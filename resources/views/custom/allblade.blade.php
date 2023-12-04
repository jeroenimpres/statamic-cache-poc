@extends('bladelayout')

@section('content')
    Well hellow,
    @include('dynamic/_random_name') 👋
    <br>
    <i>(All blade, so also base layout, with include tag)</i>
    <br>
    As this path /customviews/* is in the exclude, the above name should change.
    <br>
    This is {{ $title }}
@endsection
