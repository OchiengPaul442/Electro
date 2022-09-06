{{-- section one --}}
<div class="relative w-full bg-w-green p-1 text-sm text-white flex justify-between">
    <div>
        <span>Call Us <span class="text-w-orange">(+256)</span> 778 909 655 </span>
    </div>
    <div class="flex space-x-2">
        <a href="#" data-tooltip-target="tooltip-bottom-twitter" data-tooltip-placement="bottom" type="button">
            <x-carbon-logo-twitter class="w-5 h-5" />
        </a>
        {{-- twitter tooltip --}}
        <div id="tooltip-bottom-twitter" role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Twitter
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="#" data-tooltip-target="tooltip-bottom-facebook" data-tooltip-placement="bottom" type="button">
            <x-carbon-logo-facebook class="w-5 h-5" />
        </a>
        {{-- Facebook tooltip --}}
        <div id="tooltip-bottom-facebook" role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Facebook
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="#" data-tooltip-target="tooltip-bottom-instagram" data-tooltip-placement="bottom" type="button">
            <x-carbon-logo-instagram class="w-5 h-5" />
        </a>
        {{-- instagram tooltip --}}
        <div id="tooltip-bottom-instagram" role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Instagram
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="#" data-tooltip-target="tooltip-bottom-Snapchat" data-tooltip-placement="bottom" type="button">
            <x-carbon-logo-snapchat class="w-5 h-5" />
        </a>
        {{-- snaochat tooltip --}}
        <div id="tooltip-bottom-Snapchat" role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Snapchat
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
</div>
{{-- section  two --}}
<nav class="container mx-auto items-center flex justify-between w-full relative p-1">
    {{-- logo --}}
    <div class="w-full relative">
        <a href="#" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" width="50px">
            <span class="xl:text-3xl lg:text-2xl sm:text-xl text-w-blue font-semibold">Electro</span>
        </a>
    </div>
    {{-- search section --}}
    <div id="search-bar" class="w-full relative items-center">
        {{-- search component --}}
        @include('components.forms.search')
    </div>
    {{-- icons --}}
    <div class="relative w-full flex justify-end">
        <ul class="m-0 p-0 flex space-x-2">
            <li><a href="{{ route('cart') }}"
                    class="{{ Request::is('cart') ? 'text-white bg-gray-400' : '' }} bg-w-gray rounded-md hover:bg-gray-400 hover:text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                    <x-carbon-shopping-cart-plus class="w-5 h-5" />
                </a></li>
            <li><a href="#" type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact"
                    aria-controls="drawer-contact"
                    class="message-btn bg-w-gray rounded-md hover:bg-gray-400 hover:text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                    <x-carbon-mail-all class="w-5 h-5" />
                </a></li>
            <li><a href="#" id="search-btn"
                    class="bg-w-gray rounded-md hover:bg-gray-400 hover:text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                    <x-carbon-search class="w-5 h-5 icon1" />
                    <x-carbon-close class="w-5 h-5 icon2 hidden" />
                </a></li>

            @if (Session::has('userID'))
                <li><a href="{{ route('logout') }}"
                        class="bg-w-darkbrown rounded-md hover:bg-w-darkbrown text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                        <x-carbon-logout class="w-5 h-5" />
                    </a></li>
            @else
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#AuthModalPopup"
                        class="bg-w-gray rounded-md auth-btn hover:bg-gray-400 hover:text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                        <x-carbon-user class="w-5 h-5" />
                    </a></li>
            @endif
        </ul>
    </div>
</nav>
{{-- mobile search bar --}}
<div class="w-full p-2 hidden container mx-auto" id="mobile-search-bar">
    {{-- search component --}}
    @include('components.forms.search')
</div>
{{-- section three --}}
<nav class="bg-w-blue p-2 w-full" id="Navbar">
    <div class="py-3 px-4 mx-auto w-auto flex justify-between container md:px-6">
        {{-- menu list --}}
        <div class="flex items-center">
            <div class="w-full flex justify-start cursor-pointer" id="menu-btn">
                <x-carbon-menu class="w-5 h-5 text-white menu1" />
                <x-carbon-close class="w-5 h-5 text-white menu2 hidden" />
            </div>
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-semibold" id="menu-list">
                <li>
                    <a href="{{ route('home') }}"
                        class="{{ Request::is('/') ? 'text-w-orange' : '' }} text-white transition-all ease-in-out hover:text-w-orange"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="{{ Request::is('about') ? 'text-w-orange' : '' }} text-white transition-all ease-in-out hover:text-w-orange">About</a>
                </li>
                {{-- appear when user logins in --}}
                @if (Session::has('userID'))
                    <li>
                        <a href="{{ route('special') }}"
                            class="{{ Request::is('special') ? 'text-w-orange' : '' }} text-white transition-all ease-in-out hover:text-w-orange">SpecialOffer</a>
                    </li>
                    <li>
                        <a href="{{ route('best') }}"
                            class="{{ Request::is('best') ? 'text-w-orange' : '' }} text-white transition-all ease-in-out hover:text-w-orange">Bestseller</a>
                    </li>
                    <li>
                        <a href="{{ route('myaccount') }}"
                            class="{{ Request::is('myaccount') ? 'text-w-orange' : '' }} text-white transition-all ease-in-out hover:text-w-orange">My
                            Account</a>
                    </li>
                @endif
            </ul>
        </div>
        {{-- logo --}}
        <div class="w-auto relative flex items-center">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" width="40px">
                <span class="xl:text-xl lg:text-2lg sm:text-lg text-white font-semibold">Electro</span>
            </a>
        </div>
        {{-- icons --}}
        <div class="relative" id="menu-list-stick">
            <ul class="m-0 p-0 flex space-x-2">
                <li><a href="{{ route('cart') }}"
                        class="{{ Request::is('cart') ? 'text-white bg-gray-400' : '' }} bg-w-gray rounded-md hover:bg-gray-400 hover:text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                        <x-carbon-shopping-cart-plus class="w-5 h-5" />
                    </a></li>
                <li><a href="#" type="button" data-drawer-target="drawer-contact"
                        data-drawer-show="drawer-contact" aria-controls="drawer-contact"
                        class="message-btn bg-w-gray rounded-md hover:bg-gray-400 hover:text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                        <x-carbon-mail-all class="w-5 h-5" />
                    </a></li>
                <li><a href="#" id="search-btn"
                        class="bg-w-gray rounded-md hover:bg-gray-400 hover:text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                        <x-carbon-search class="w-5 h-5 icon1" />
                        <x-carbon-close class="w-5 h-5 icon2 hidden" />
                    </a></li>
                @if (Session::has('userID'))
                    <li><a href="{{ route('logout') }}"
                            class="bg-w-darkbrown rounded-md hover:bg-w-darkbrown text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                            <x-carbon-logout class="w-5 h-5" />
                        </a></li>
                @else
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#AuthModalPopup"
                            class="bg-w-gray rounded-md auth-btn hover:bg-gray-400 hover:text-white transition ease-in-out p-2 cursor-pointer inline-flex items-center">
                            <x-carbon-user class="w-5 h-5" />
                        </a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
{{-- mobile nav menu --}}
<nav class="bg-w-blue p-2" id="mobile-menu-list">
    <div class="px-4 mx-auto w-full container md:px-6">
        <div class="flex items-center">
            <ul class="flex flex-col w-full space-y-2 justify-end mt-0 text-sm font-semibold">
                <li class="relative">
                    <a href="{{ route('home') }}"
                        class="{{ Request::is('/') ? 'text-w-orange bg-gray-800' : '' }} text-white transition-all ease-in-out hover:text-w-orange hover:bg-gray-800 inline-flex w-full rounded p-2">Home</a>
                </li>
                <li class="relative">
                    <a href="{{ route('about') }}"
                        class="{{ Request::is('about') ? 'text-w-orange bg-gray-800' : '' }} text-white transition-all ease-in-out hover:text-w-orange hover:bg-gray-800 inline-flex w-full rounded p-2">About</a>
                </li>
                {{-- appear when user logins in --}}
                @if (Session::has('userID'))
                    <li class="relative">
                        <a href="{{ route('special') }}"
                            class="{{ Request::is('special') ? 'text-w-orange' : '' }} hover:bg-gray-800 inline-flex w-full rounded p-2 text-white transition-all ease-in-out hover:text-w-orange">SpecialOffer</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('best') }}"
                            class="{{ Request::is('best') ? 'text-w-orange' : '' }} hover:bg-gray-800 inline-flex w-full rounded p-2 text-white transition-all ease-in-out hover:text-w-orange">Bestseller</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('myaccount') }}"
                            class="{{ Request::is('myaccount') ? 'text-w-orange' : '' }} hover:bg-gray-800 inline-flex w-full rounded p-2 text-white transition-all ease-in-out hover:text-w-orange">My
                            Account</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
