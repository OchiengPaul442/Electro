<!-- drawer component -->
<div id="drawer-contact" class="fixed z-40 h-screen p-4 overflow-y-auto bg-white w-80 hidden" tabindex="-1"
    aria-labelledby="drawer-contact-label">
    <h5 id="drawer-label"
        class="inline-flex items-center mb-6 text-base font-semibold text-w-orange uppercase">
        <x-carbon-information-filled class="w-5 h-5 mr-2"/>
        Contact us
    </h5>
    <button type="button" id="close-message-drawer" data-drawer-dismiss="drawer-contact" aria-controls="drawer-contact"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <x-carbon-close class="w-5 h-5" />
        <span class="sr-only">Close menu</span>
    </button>
    {{-- contact form component --}}
    @include('components.forms.contact')
    {{-- addtitional info --}}
    <p class="mb-2 text-sm text-gray-500">
        <a href="#" class="hover:underline">Electro@company.com</a>
    </p>
    <p class="text-sm text-gray-500">
        <a href="#" class="hover:underline"> +256-778-909-655</a>
    </p>
</div>
