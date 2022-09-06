<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css links --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- favicon --}}
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <title>{{ $title }}</title>
</head>

<body>
    <section class="main-con">
        {{-- Navbar section --}}
        @include('layouts.navbar')
        {{-- main body section --}}
        <div class="content-wrapper">
            @yield('content')
        </div>
        {{-- Footer section --}}
        <div class="relative">
            <div class="{{ Request::is('/') ? '' : 'hidden' }}">
                @include('components.forms.Newsletter')
            </div>
            @include('layouts.footer')
        </div>
    </section>
    
    {{-- components --}}
    @include('layouts.components')
    {{-- js links --}}
    @include('layouts.JSlinks')
</body>

</html>
