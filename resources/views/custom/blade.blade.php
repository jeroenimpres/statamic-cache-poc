@extends('layout')

@section('content')
    Hi there,

    @nocache('dynamic/_random_name') 👋

    <br><br>

    This is {{ $title }}
@endsection
