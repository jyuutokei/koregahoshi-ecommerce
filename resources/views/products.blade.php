<x-layout>
    <x-slot:title>
        Products
    </x-slot:title>

    <div class="min-w-0 overflow-x-hidden drawer lg:drawer-open mt-20">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col lg:ml-16">
            <div>
                <div class="breadcrumbs text-sm">
                    <ul>
                        <li><a href="{{ route("home") }}">Home</a></li>
                        <li><a href="{{ route("products") }}">Products</a></li>
                    </ul>
                </div>
                <h2 class="font-extrabold text-3xl mt-2 mb-3">PRODUCTS</h2>
                <div class="flex justify-between items-center-safe">
                    <x-search-input />
                </div>
                <label for="my-drawer-3" class="mt-5 btn drawer-button lg:hidden">
                    Filter
                    <x-icons.angle-arrow direction="right" />
                </label>
            </div>
            <div class="mt-10 grid grid-cols-[repeat(auto-fill,minmax(max(100%/4,300px),1fr))] gap-5">
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
            </div>
        </div>
        <div class="drawer-side flex flex-col lg:block">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <h3 class="font-bold text-2xl mt-25">Filters</h3>
            <div>
                <h3 class="font-bold text-xl mt-4 mb-1">Size</h3>
                <x-buttons.size-tabs />
            </div>
            <div class="divider w-full"></div>
            <div>
                <x-accordion>Availability</x-accordion>
                <x-accordion>Category</x-accordion>
                <x-accordion>Price Range</x-accordion>
                <x-accordion>Collections</x-accordion>
                <x-accordion>Tags</x-accordion>
                <x-accordion>Ratings</x-accordion>
            </div>
        </div>
    </div>
</x-layout>