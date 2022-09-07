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

<body class="bg-gray-300">
    {{-- navbar section --}}
    <nav
        style="z-index: 1000" class="relative w-full flex flex-wrap items-center justify-between py-3 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg">
        <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
            <div class="container-fluid">
                {{-- logo --}}
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" width="50px">
                    <span class="xl:text-2xl lg:text-2xl sm:text-xl text-w-blue font-semibold">Electro</span>
                </a>
            </div>
        </div>
    </nav>
    {{-- email verification --}}
    <div class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full modal-dialog modal-dialog-centered max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="py-4 px-6 rounded-t border-b ">
                    <h3 class="text-base font-semibold text-gray-900 lg:text-xl">
                        Email Verification
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6">
                    <p class="text-sm text-gray-700">
                        Please check your email for a verification link.
                    </p>
                    <p class="text-sm text-gray-700">
                        If you did not receive the email, <a href="{{ route('home') }}" class="text-blue-500 hover:underline">click
                            here to request another</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- js links
    @include('layouts.JSlinks') --}}
</body>

</html>
