@extends('index')

@section('content')
    <div class="w-full relative space-y-9">
        <div class="container mx-auto xl:px-40 px-2 pt-2 space-y-9">
            <!-- Breadcrumb -->
            <nav class="flex py-3 px-5 text-gray-700 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
                aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
                            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="#"
                                class="ml-1 text-sm font-medium text-w-orange hover:text-gray-900 md:ml-2">Product
                                Name</a>
                        </div>
                    </li>
                </ol>
            </nav>
            {{-- end of breadcrumb --}}
            <!-- component -->
            <section class="text-gray-700 body-font overflow-hidden bg-white">
                <div class="mx-auto">
                    <div class="mx-auto flex justify-between flex-wrap">
                        {{-- product image --}}
                        <a href="#" class="lg:w-1/2 w-full object-center rounded border border-gray-200" data-bs-toggle="modal" data-bs-target="#imageModal" type="button">
                            <img alt="product name" 
                                class="object-cover object-center h-full transition ease-in-out duration-150"
                                src="{{ asset('images/christopher-gower-_aXa21cf7rY-unsplash.jpg') }}">
                        </a>
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">PRODUCT NAME</h2>
                            <h1 class="text-gray-800 text-3xl title-font font-medium mb-1">The Catcher in the Rye</h1>
                            {{-- social links --}}
                            <div class="flex mb-4">
                                <span class="flex py-2">
                                    <a class="text-gray-300 cursor-pointer hover:text-gray-800">
                                        <x-carbon-logo-facebook class="w-5 h-5" />
                                    </a>
                                    <a class="ml-2 text-gray-300 cursor-pointer hover:text-gray-800">
                                        <x-carbon-logo-twitter class="w-5 h-5" />
                                    </a>
                                    <a class="ml-2 text-gray-300 cursor-pointer hover:text-gray-800">
                                        <x-carbon-logo-instagram class="w-5 h-5" />
                                    </a>
                                    <a class="ml-2 text-gray-300 cursor-pointer hover:text-gray-800">
                                        <x-carbon-logo-snapchat class="w-5 h-5" />
                                    </a>
                                </span>
                            </div>
                            {{-- product short description --}}
                            <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric
                                sriracha
                                taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage
                                brooklyn.
                                Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
                                neutra
                                jean shorts keytar banjo tattooed umami cardigan.</p>
                            <div class="w-full pt-2">
                                <span class="text-w-orange flex items-center space-x-2 font-semibold">
                                    <H1 class="text-gray-800 text-xl title-font font-medium">Category:</H1><span
                                        class="top-2">Product category name</span>
                                </span>
                                <span class="text-w-orange flex items-center space-x-2 font-semibold">
                                    <H1 class="text-gray-800 text-xl title-font font-medium">Price Tag:</H1><span
                                        class="top-2">$999</span>
                                </span>
                            </div>
                            {{-- product increment and like --}}
                            <div class="flex justify-between space-y-3 mt-6 pb-4 border-b-2 border-gray-200 mb-5">
                                <div class="flex items-center space-x-3">
                                    <button
                                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <x-carbon-subtract class="w-5 h-5" />
                                    </button>
                                    <div>
                                        <input type="number" id="second_product"
                                            class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="1" required>
                                    </div>
                                    <button
                                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <x-carbon-add class="w-5 h-5" />
                                    </button>
                                </div>
                                <button
                                    class="rounded-full w-10 h-10 bg-w-gray p-0 border-0 inline-flex items-center justify-center hover:text-gray-800 text-gray-400">
                                    <x-carbon-thumbs-up-filled class="w-5 h-5" />
                                </button>
                            </div>
                            {{-- button sub images section --}}
                            <div class="flex flex-col items-center justify-center w-full space-y-4">
                                <a class="w-full" id="add-product-btn" href="#">
                                    <button class="text-white w-full bg-w-green hover:bg-w-darkgreen border-0 p-2 rounded-lg">
                                        Add to Cart</button>
                                </a>
                                <div class="w-full mx-auto flex gap-5">
                                    @php
                                        $x = 0;
                                    @endphp
                                    @while ($x < 3)
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" type="button">
                                            <img src="{{ asset('images/christopher-gower-_aXa21cf7rY-unsplash.jpg') }}"
                                                width="85%"
                                                class="p-2 object-cover object-center rounded border border-gray-200"
                                                alt="product name">
                                        </a>
                                        @php
                                            $x++;
                                        @endphp
                                    @endwhile
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- details about product --}}
            <section>
                <div class="w-full text-center">
                    <h1 class="text-w-orange text-2xl font-bold">Description</h1>
                    <div class="flex justify-center">
                        <div class="h-2 w-8 bg-w-green rounded-md my-8"></div>
                    </div>
                    <p class="text-xl">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint neque provident aut ullam soluta
                        amet,
                        aspernatur culpa voluptas voluptate dignissimos quis. Culpa quasi minima consequuntur impedit
                        aspernatur
                        cumque tempore doloremque?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint neque provident aut ullam soluta
                        amet,
                        aspernatur culpa voluptas voluptate dignissimos quis. Culpa quasi minima consequuntur impedit
                        aspernatur
                        cumque tempore doloremque?
                    </p>
                </div>
            </section>
            {{-- related products --}}
            <section>
                <div class="text-center">
                    <h1 class="text-w-orange text-2xl font-bold">Related Products</h1>
                </div>
                <div class="flex justify-center">
                    <div class="h-2 w-8 bg-w-green rounded-md my-8"></div>
                </div>
                {{-- product cards --}}
                <div class="w-full relative border border-gray-300 bg-gray-50 rounded-lg">
                    @include('components.carousels.products.related')
                </div>
            </section>
        </div>
    </div>
@endsection
