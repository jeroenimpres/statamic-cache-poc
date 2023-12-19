@extends('bladelayout')

@section('content')
    Well hellow,
    @include('dynamic/_random_name') 👋
    <br>
    <i>(All blade, so also base layout is in Blade. The above names comes in an 'include' tag)</i>
    <br>
    @if(str_contains($current_url, 'customviews'))
        I think that this page should NOT be cached because it is in the excluded list.
    @endif
    <br><br>
    Current caching strategy: {{ config('statamic.static_caching.strategy') }}
    <br><br>
    Exclude list from the config:
    <br>
    <pre>
        @foreach(config('statamic.static_caching.exclude') as $excluded)
            {{ $excluded }}
        @endforeach
    </pre>
    <br>
    This is {{ $title }}
@endsection
