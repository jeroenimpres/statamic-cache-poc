<!doctype html>
<html lang="{{ $site->short_locale }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @vite(['resources/css/site.css', 'resources/js/site.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal text-gray-800">
<div class="border-gray-400 border-solid mx-auto px-2 bg-gray-300 flex flex-col items-center justify-center">
    <ul class="flex flex-row">
        @foreach(\Statamic\Statamic::tag('nav:main')->fetch() as $navigationItem)
            <li class="p-4">
                <a href="{{ $navigationItem['url'] }}" class="underline @if($navigationItem['is_current']) italic font-bold @endif">
                    {{ $navigationItem['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
<div class="border-gray-400 border-2 mx-auto px-2 bg-pink flex flex-col items-center justify-center">
    Name of the moment (in a Blade nocache tag):
    @nocache('dynamic._random_name')
</div>
<div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center">
    @yield('content')
</div>
</body>
</html>
