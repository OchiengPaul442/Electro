<footer class="p-4 bg-w-blue sm:p-6 relative" id="footer">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/logo2.png') }}" class="ml-3" width="100px" alt="Electro Logo">
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">COMPANY</h2>
                <ul class="text-gray-300 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:text-w-orange">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-w-orange">Special Offers</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Follow us</h2>
                <ul class="text-gray-300 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:text-w-orange ">Twitter</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-w-orange">Instagram</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Legal</h2>
                <ul class="text-gray-300 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:text-w-orange">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-w-orange">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-300 sm:text-center dark:text-gray-400">© 2022 <a href="#"
                class="hover:text-w-orange">Electro™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-w-orange">
                <x-carbon-logo-twitter class="w-5 h-5" />
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-w-orange">
                <x-carbon-logo-instagram class="w-5 h-5" />
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-w-orange">
                <x-carbon-logo-snapchat class="w-5 h-5" />
                <span class="sr-only">snapchat page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-w-orange">
                <x-carbon-logo-facebook class="w-5 h-5" />
                <span class="sr-only">Facebook account</span>
            </a>            
        </div>
    </div>
</footer>
