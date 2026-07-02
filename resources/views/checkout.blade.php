<x-layout>
    <x-slot:title>
        Checkout
    </x-slot:title>

    <div class="min-w-0">
        <h1 class="font-extrabold text-3xl">CHECKOUT</h1>
        <div class="mt-8">
            <div class="flex flex-col md:flex-row md:gap-5">
                <div class="flex-1 border py-4 px-7">
                    <h3 class="font-bold text-lg">Delivery Address</h3>
                    <p class="text-sm text-gray-500">Enter your address to see delivery options</p>
                    <div class="mt-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi sit minima
                            culpa
                            voluptatem architecto asperiores ducimus, cumque, officia autem dolorum enim ad quidem
                        </p>
                        <button aria-label="Change delivery address" class="btn rounded-none
                                    mt-3 bg-altgray">Change</button>
                    </div>
                </div>
                <div class="divider md:divider-horizontal"></div>
                <div class="border py-4 px-7">
                    <h3 class="font-bold text-lg">Payment Method</h3>
                    <p class="font-light text-sm text-gray-500">Choose your payment method</p>
                    <div class="mt-5">
                        <p>Cash on Delivery</p>
                        <button aria-label="Change payment method"
                            class="btn rounded-none mt-8 bg-altgray">Change</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider mt-5"></div>
        <h3 class="font-bold text-2xl">Your Order</h3>
        <div class="flex flex-col md:flex-row gap-5 mt-8">
            <div class="grid grid-cols-[repeat(auto-fill,minmax(max(100%/3,250px),1fr))] gap-5 w-full">
                <x-card-order />
                <x-card-order />
                <x-card-order />
                <x-card-order />
            </div>
            <div class="divider md:divider-horizontal"></div>
            <div>
                <div class="border p-6 w-full md:w-sm sticky top-15">
                    <div class="flex justify-between items-center mb-2">
                        <p>Merchandise Subtotal:</p>
                        <p class="font-bold">$99</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p>Shipping Subtotal:</p>
                        <p class="font-bold">$28</p>
                    </div>
                    <div class="divider"></div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Total:</p>
                        <p class="font-bold">$127</p>
                    </div>
                    <div>
                        <button class="mt-7 w-full btn rounded-none bg-altgray">Place
                            Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>