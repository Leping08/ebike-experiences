@extends('layouts.app')

@section('title', 'EBikes Florida')

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
        <div class="mx-auto container flex px-6 pb-32 pt-20 sm:pt-60 lg:px-8 lg:pt-32">
            <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl md:max-w-full">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-200 sm:text-6xl">Experience the
                        EBike difference
                    </h1>
                    <p
                        class="relative mt-6 md:pr-10 sm:pr-0 text-lg leading-8 text-gray-600 dark:text-gray-300 sm:max-w-md lg:max-w-none">
                        Welcome to our website dedicated to all things e-bike! If you're looking for a thrilling and
                        eco-friendly way to explore the outdoors, you've come to the right place.

                        Our site is a hub for e-bike enthusiasts, featuring firsthand accounts of unforgettable rides,
                        and helpful tips for maintaining and optimizing your own
                        e-bike.

                        So buckle up (or should we say, pedal up?) and get ready for an electrifying journey through the
                        world of e-bike experiences!</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="{{ route('trails.index') }}"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Find
                            a trail</a>
                        {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Live demo
                            <span aria-hidden="true">→</span></a> --}}
                    </div>
                </div>
            </div>
            <div class="gap-8 w-1/2 hidden lg:flex">
                <div class="mt-20 w-44">
                    <div class="mt-8">
                        <img src="{{ asset('/img/bikes/speedometer.jpg') }}" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('/img/bikes/folding-bike.jpg') }}" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                </div>
                <div class="mt-10 w-44">
                    <div class="mt-8">
                        <img src="{{ asset('/img/bikes/sunset.jpg') }}" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('/img/bikes/bike-light.jpg') }}" alt="Bike image"
                            class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                    </div>
                </div>
                <div class="mt-40 w-44">
                    <div class="mt-8">
                        <img src="{{ asset('/img/bikes/blue-bike.jpg') }}" alt="Bike image"
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
                                            <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <title>road-variant</title>
                                                <path
                                                    d="M18.1,4.8C18,4.3 17.6,4 17.1,4H13L13.2,7H10.8L11,4H6.8C6.3,4 5.9,4.4 5.8,4.8L3.1,18.8C3,19.4 3.5,20 4.1,20H10L10.3,15H13.7L14,20H19.8C20.4,20 20.9,19.4 20.8,18.8L18.1,4.8M10.4,13L10.6,9H13.2L13.4,13H10.4Z" />
                                            </svg>
                                            <span class="inline text-gray-800 dark:text-gray-400 font-normal">Over</span>
                                            20
                                        </dt>
                                        <dd class="inline text-gray-800 dark:text-gray-400">miles of paved trail ready for
                                            exploration.
                                        </dd>
                                    </div>

                                    <div class="relative pl-9">
                                        <dt class="inline font-semibold text-gray-900 dark:text-white">
                                            <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <title>account-multiple</title>
                                                <path
                                                    d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z" />
                                            </svg>
                                            <span class="inline text-gray-800 dark:text-gray-400 font-normal">Over</span>
                                            650,000
                                        </dt>
                                        <dd class="inline text-gray-800 dark:text-gray-400">annual visitors use the trail
                                            for exercise and exploration.</dd>
                                    </div>

                                    <div class="relative pl-9">
                                        <dt class="inline font-semibold text-gray-900 dark:text-white">
                                            <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <title>bike-fast</title>
                                                <path
                                                    d="M16 1.2C15 1.2 14.2 2 14.2 3S15 4.8 16 4.8 17.8 4 17.8 3 17 1.2 16 1.2M12.4 4.1C11.93 4.1 11.5 4.29 11.2 4.6L7.5 8.29C7.19 8.6 7 9 7 9.5C7 10.13 7.33 10.66 7.85 10.97L11.2 13V18H13V11.5L10.75 9.85L13.07 7.5L14.8 10H19V8.2H15.8L13.86 4.93C13.57 4.43 13 4.1 12.4 4.1M10 3H3C2.45 3 2 2.55 2 2S2.45 1 3 1H12.79C12.58 1.34 12.41 1.71 12.32 2.11C11.46 2.13 10.65 2.45 10 3M5 12C2.24 12 0 14.24 0 17S2.24 22 5 22 10 19.76 10 17 7.76 12 5 12M5 20.5C3.07 20.5 1.5 18.93 1.5 17S3.07 13.5 5 13.5 8.5 15.07 8.5 17 6.93 20.5 5 20.5M19 12C16.24 12 14 14.24 14 17S16.24 22 19 22 24 19.76 24 17 21.76 12 19 12M19 20.5C17.07 20.5 15.5 18.93 15.5 17S17.07 13.5 19 13.5 22.5 15.07 22.5 17 20.93 20.5 19 20.5M5.32 11H1C.448 11 0 10.55 0 10S.448 9 1 9H5.05C5.03 9.16 5 9.33 5 9.5C5 10.03 5.12 10.54 5.32 11M6 7H2C1.45 7 1 6.55 1 6S1.45 5 2 5H7.97L6.09 6.87C6.05 6.91 6 6.96 6 7Z" />
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
                            <img src="{{ asset('/img/trails/legacy-trail/trail-lights.jpg') }}" alt="The Legacy Trail"
                                class="w-full rounded-xl shadow-xl">
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
