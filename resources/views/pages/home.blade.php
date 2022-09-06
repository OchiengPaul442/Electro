@extends('index')

@section('content')
    <div class="w-full relative space-y-16">
        {{-- @if (Session::has('success'))
            <span class="text-green-700">{{ Session::get('success') }}</span>
        @elseif (Session::has('fail'))
            <span class="text-red-700">{{ Session::get('fail') }}</span>
        @elseif (Session::has('error'))
            <span class="text-red-700">{{ Session::get('error') }}</span>
        @endif --}}
        <div class="w-full relative">
            {{-- carousel --}}
            @include('components.carousels.homeSlider')
        </div>
        <div class="container mx-auto xl:px-40 sm:px-2 space-y-9">
            {{-- services provided section --}}
            <div class="services">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 w-full justify-around gap-10">
                    <div class="relative w-full border-t-2 border-w-orange">
                        <div
                            class="rounded-md border border-gray-300 h-56 bg-gray-50 items-center justify-center p-4 mt-6 flex flex-col">
                            <x-carbon-delivery-truck class="w-14 h-14 p-2 border border-gray-400 rounded-full mb-4" />
                            <h1 class="text-xl font-medium text-center">Free shipping</h1>
                            <span class="text-gray-400 text-center font-medium">For goods over a certain cap</span>
                        </div>
                    </div>
                    <div class="relative w-full border-t-2 border-w-orange">
                        <div
                            class="rounded-md border border-gray-300 h-56 bg-gray-50 items-center justify-center p-4 mt-6 flex flex-col">
                            <x-carbon-headset class="w-14 h-14 p-2 border border-gray-400 rounded-full mb-4" />
                            <h1 class="text-xl font-medium text-center">24/7 Support</h1>
                            <span class="text-gray-400 text-center font-medium">Customer service available for You</span>
                        </div>
                    </div>
                    <div class="relative w-full border-t-2 border-w-orange">
                        <div
                            class="rounded-md border border-gray-300 h-56 bg-gray-50 items-center justify-center p-4 mt-6 flex flex-col">
                            <x-carbon-security class="w-14 h-14 p-2 border border-gray-400 rounded-full mb-4" />
                            <h1 class="text-xl font-medium text-center">Safe shopping</h1>
                            <span class="text-gray-400 text-center font-medium">Goods From trusted Dealers</span>
                        </div>
                    </div>
                    <div class="relative w-full border-t-2 border-w-orange">
                        <div
                            class="rounded-md border border-gray-300 h-56 bg-gray-50 items-center justify-center p-4 mt-6 flex flex-col">
                            <x-carbon-gift class="w-14 h-14 p-2 border border-gray-400 rounded-full mb-4" />
                            <h1 class="text-xl font-medium text-center">Special Gifts</h1>
                            <span class="text-gray-400 text-center font-medium">Customer rewards for loyal Customers</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- products section --}}
            @include('pages.products')
        </div>
    </div>
@endsection
