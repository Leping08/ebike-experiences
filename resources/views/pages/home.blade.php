@extends('layouts.app')

@section('title', 'eBikes Florida')

@section('description',
    'Explore the benefits of electric bikes in Florida. Our site provides information and resources
    to help you make the switch to eco-friendly transportation. Learn about the latest e-bike models, regulations, and best
    practices for safe riding in the Sunshine State.')

@section('content')
    {{-- @todo make this work in dark mode --}}
    <main class="container mx-auto">
        {{-- <div class="w-full">
        <iframe class="h-96 w-2/3" src="http://custompromotionsinc.com/flipbooks/LaboratoryMillWithPrices/"></iframe>
    </div> --}}
        <div class="mx-auto flex max-w-7xl px-6 pb-32 pt-20 sm:pt-60 lg:px-8 lg:pt-32">
            <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Experience the eBike difference
                    </h1>
                    <p class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">Cupidatat minim id
                        magna ipsum sint dolor qui. Sunt sit in quis cupidatat mollit aute velit. Et labore commodo nulla
                        aliqua proident mollit ullamco exercitation tempor. Sint aliqua anim nulla sunt mollit id pariatur
                        in voluptate cillum.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Live demo <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
            <div class="gap-8 w-1/2 hidden lg:flex">
                <div class="mt-20 w-44">
                    <div class="mt-8">
                        <img src="https://images.unsplash.com/photo-1620282451330-467acd26eb99" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                    <div class="mt-8">
                        <img src="https://images.unsplash.com/photo-1656662570684-4e14a6677c74" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                </div>
                <div class="mt-10 w-44">
                    <div class="mt-8">
                        <img src="https://images.unsplash.com/photo-1622772526703-2e3f1e4e444b" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                    <div class="mt-8">
                        <img src="https://images.unsplash.com/photo-1622689381190-b46bc99ab657" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                </div>
                <div class="mt-40 w-44">
                    <div class="mt-8">
                        <img src="https://images.unsplash.com/photo-1669183016652-3379b375604f" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
