<div class="w-full p-2 bg-w-green xl:flex lg:flex justify-center">
    <div class="xl:flex lg:flex text-center justify-center p-4">
        <div class="flex justify-center">
            <x-carbon-email class="w-12 h-12 text-w-orange"/>
        </div>
        <div>
            <h1 class="text-2xl text-w-orange font-semibold">
                Fear of Missing Out
            </h1>
            <p class="text-sm text-w-orange">
                Get the latest deals,Updates and more.
            </p>
        </div>
    </div>
    {{-- news letter form --}}
    <form class="flex items-center">
        <label for="voice-search" class="sr-only">Search</label>
        <div class="relative w-full">           
            <input type="text" id="voice-search"
                class="bg-gray-50 border border-gray-300 text-w-blue text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full pl-2 p-2.5"
                placeholder="Your Email Address" required="">           
        </div>
        <button type="submit"
            class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-w-orange rounded-lg border border-w-orange hover:scale-105 focus:ring-4 focus:outline-none focus:ring-w-orange">
            Subscribe
        </button>
    </form>
</div>
