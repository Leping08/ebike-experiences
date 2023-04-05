@extends('layouts.app')

@section('title', 'eBikes Florida')

@section('description',
    'Explore the benefits of electric bikes in Florida. Our site provides information and resources
    to help you make the switch to eco-friendly transportation. Learn about the latest e-bike models, regulations, and best
    practices for safe riding in the Sunshine State.')

@section('content')
    {{-- @todo make this work in dark mode --}}
    <main class="bg-white dark:bg-gray-800">
        {{-- <div class="w-full">
        <iframe class="h-96 w-2/3" src="http://custompromotionsinc.com/flipbooks/LaboratoryMillWithPrices/"></iframe>
        </div> --}}
        <div class="mx-auto container flex max-w-7xl px-6 pb-32 pt-20 sm:pt-60 lg:px-8 lg:pt-32">
            <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-200 sm:text-6xl">Experience the
                        eBike difference
                    </h1>
                    <p class="relative mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300 sm:max-w-md lg:max-w-none">
                        Cupidatat minim id
                        magna ipsum sint dolor qui. Sunt sit in quis cupidatat mollit aute velit. Et labore commodo nulla
                        aliqua proident mollit ullamco exercitation tempor. Sint aliqua anim nulla sunt mollit id pariatur
                        in voluptate cillum.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                        {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Live demo
                            <span aria-hidden="true">→</span></a> --}}
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
        <div>
            <div class="overflow-hidden bg-gray-100 dark:bg-gray-900 py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div
                        class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                        <div class="lg:ml-auto lg:pl-4 lg:pt-4">
                            <div class="lg:max-w-lg">
                                <h2 class="text-base font-semibold leading-7 text-indigo-600 dark:text-indigo-400">Local
                                    Trails
                                </h2>
                                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                                    The Legacy Trail</p>
                                <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400"></p>
                                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                    <div class="relative pl-9">
                                        <dt class="inline font-semibold text-gray-900 dark:text-white">
                                            <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            18.5
                                        </dt>
                                        <dd class="inline text-gray-800 dark:text-gray-400">Miles of paved trail ready for
                                            exploration.
                                        </dd>
                                    </div>

                                    <div class="relative pl-9">
                                        <dt class="inline font-semibold text-gray-900 dark:text-white">
                                            <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            600,000
                                        </dt>
                                        <dd class="inline text-gray-800 dark:text-gray-400">Annual visitors use the trail
                                            for exercise and exploration.</dd>
                                    </div>

                                    <div class="relative pl-9">
                                        <dt class="inline font-semibold text-gray-900 dark:text-white">
                                            <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                                <path fill-rule="evenodd"
                                                    d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{ Carbon\Carbon::now()->diffInYears(Carbon\Carbon::parse('2004-12-21')) }}
                                        </dt>
                                        <dd class="inline text-gray-800 dark:text-gray-400">Years of adventure.</dd>
                                    </div>

                                    <div class="mt-10 flex items-center gap-x-6">
                                        <a href="{{ route('trails.legacy-trail') }}"
                                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">More
                                            Info</a>
                                    </div>

                                </dl>
                            </div>
                        </div>
                        <div class="flex items-start justify-end lg:order-first">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Legacy_Trail_South_Terminus_at_Venice.jpg"
                                alt="Product screenshot" class="w-full rounded-xl shadow-xl">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div>
            @include('components.ebike-cta')
        </div>
    </main>
@endsection
