<div class="space-y-9">
    {{-- filter section --}}
    {{-- best sellers --}}
    <div class="w-full relative border border-gray-300 bg-gray-50 rounded-lg">
        <div class="w-full rounded-t-lg bg-w-green text-white p-2 flex justify-between">
            <span class="font-medium text-2xl">Best Sellers</span>
            <span class="cursor-pointer hover:underline hover:text-w-orange">See all</span>
        </div>
        @include('components.carousels.products.bestseller')
    </div>
    {{-- special sells --}}
    <div class="w-full relative border border-gray-300 bg-gray-50 rounded-lg">
        <div class="w-full rounded-t-lg bg-w-green text-white p-2 flex justify-between">
            <span class="font-medium text-2xl">Special Offers</span>
            <span class="cursor-pointer hover:underline hover:text-w-orange">See all</span>
        </div>
        {{-- carousel --}}
        @include('components.carousels.products.special')
    </div>
    {{-- two Category section --}}
    <div class="w-full relative border border-gray-300 bg-gray-50 rounded-lg">
        <div class="w-full relative">
            <div class="grid grid-cols-2 p-2 gap-2">
                <div class="h-72 flex-grow bg-yellow-500">1</div>
                <div class="h-72 flex-grow bg-yellow-500">2</div>
            </div>
        </div>
    </div>
    {{-- discounted offers --}}
    <div class="w-full relative border border-gray-300 bg-gray-50 rounded-lg">
        <div class="w-full rounded-t-lg bg-w-green text-white p-2 flex justify-between">
            <span class="font-medium text-2xl">Discounted Offers</span>
            <span class="cursor-pointer hover:underline hover:text-w-orange">See all</span>
        </div>
        @include('components.carousels.products.discount')
    </div>
    {{-- new products --}}
    <div class="w-full relative border border-gray-300 bg-gray-50 rounded-lg">
        <div class="w-full rounded-t-lg bg-w-green text-white p-2 flex justify-between">
            <span class="font-medium text-2xl">New Stock</span>
            <span class="cursor-pointer hover:underline hover:text-w-orange">See all</span>
        </div>
        @include('components.carousels.products.new')
    </div>
    {{-- banner section --}}
    @include('pages.product.banners')
    {{-- old products --}}
    <div class="w-full relative border border-gray-300 bg-gray-50 rounded-lg">
        <div class="w-full rounded-t-lg bg-w-green text-white p-2 flex justify-between">
            <span class="font-medium text-2xl">Refurbished Stock</span>
            <span class="cursor-pointer hover:underline hover:text-w-orange">See all</span>
        </div>
        @include('components.carousels.products.old')
    </div>
</div>
