@extends('layouts.layout')
@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-8 md:mb-12">Collections</h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6">
                <!-- product - start -->
                <div>
                    <a href="#"
                        class="group h-96 flex items-end bg-gray-100 rounded-lg overflow-hidden shadow-lg relative p-4">
                        <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                            loading="lazy" alt="Photo by Austin Wade"
                            class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

                        <div class="w-full flex flex-col bg-white text-center rounded-lg relative p-4">
                            <span class="text-gray-500">Men</span>
                            <span class="text-gray-800 text-lg lg:text-xl font-bold">Business Causual</span>
                        </div>
                    </a>
                </div>
                <!-- product - end -->

                <!-- product - start -->
                <div>
                    <a href="#"
                        class="group h-96 flex items-end bg-gray-100 rounded-lg overflow-hidden shadow-lg relative p-4">
                        <img src="https://images.unsplash.com/photo-1603344797033-f0f4f587ab60?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                            loading="lazy" alt="Photo by engin akyurt"
                            class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

                        <div class="w-full flex flex-col bg-white text-center rounded-lg relative p-4">
                            <span class="text-gray-500">Women</span>
                            <span class="text-gray-800 text-lg lg:text-xl font-bold">Summer Season</span>
                        </div>
                    </a>
                </div>
                <!-- product - end -->

                <!-- product - start -->
                <div>
                    <a href="#"
                        class="group h-96 flex items-end bg-gray-100 rounded-lg overflow-hidden shadow-lg relative p-4">
                        <img src="https://images.unsplash.com/photo-1552668693-d0738e00eca8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                            loading="lazy" alt="Photo by Austin Wade"
                            class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

                        <div class="w-full flex flex-col bg-white text-center rounded-lg relative p-4">
                            <span class="text-gray-500">Men</span>
                            <span class="text-gray-800 text-lg lg:text-xl font-bold">Streetwear</span>
                        </div>
                    </a>
                </div>
                <!-- product - end -->

                <!-- product - start -->
                <div>
                    <a href="#"
                        class="group h-96 flex items-end bg-gray-100 rounded-lg overflow-hidden shadow-lg relative p-4">
                        <img src="https://images.unsplash.com/photo-1560269999-cef6ebd23ad3?auto=format&q=75&fit=crop&w=600&h=700"
                            loading="lazy" alt="Photo by Austin Wade"
                            class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

                        <div class="w-full flex flex-col bg-white text-center rounded-lg relative p-4">
                            <span class="text-gray-500">Women</span>
                            <span class="text-gray-800 text-lg lg:text-xl font-bold">Sale</span>
                        </div>
                    </a>
                </div>
                <!-- product - end -->
            </div>
        </div>
    </div>
@endsection
