{{-- search form --}}
<form class="relative w-full">
    <div class="relative">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <x-carbon-search class="w-5 h-5" />
        </div>
        <input type="search" id="default-search"
            class="block p-2 pl-10 w-full text-sm text-w-blue bg-gray-50 rounded-lg border border-gray-300 focus:ring-w-orange focus:border-w-orange"
            placeholder="Search For Products ..." required="">
        <button type="submit"
            class="text-w-blue font-semibold absolute right-2.5 bg-w-orange hover:bg-yellow-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-w-orange rounded-lg text-sm px-3 py-1"
            style="bottom: 5px;">Search</button>
    </div>
</form>
