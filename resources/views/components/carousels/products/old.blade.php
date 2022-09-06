{{-- old products carousel --}}
<div id="default-carousel" class="relative p-2" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-72 overflow-hidden">
        <!-- Item 1 -->
        <div class="grid grid-cols-4 gap-2 duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
            data-carousel-item="">
            @include('pages.product.criteria.old')
        </div>
        <!-- Item 2 -->
        <div class="grid grid-cols-4 gap-2 duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
            data-carousel-item="">
            @include('pages.product.criteria.old')
        </div>
        <!-- Item 3 -->
        <div class="grid grid-cols-4 gap-2 duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
            data-carousel-item="">
            @include('pages.product.criteria.old')
        </div>
    </div>
    <!-- Slider controls -->
    @include('components.carousels.products.slidercontrol')
</div>