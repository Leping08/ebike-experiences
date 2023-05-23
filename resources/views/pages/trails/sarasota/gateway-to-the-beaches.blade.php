@extends('layouts.app')

@section('title', 'The Gateway to the Beaches')

@section('description', 'One of the most enjoyable EBike routes in Sarasota, FL; this EBike trail takes riders on a scenic journey from Payne Park to Bayfront Park.')

@section('content')
    @php
        $trailheads = [
            [
                'title' => 'Payne Park',
                'video_id' => '-BbcZSgGB_k',
                'description' => 'Ride from Payne Park to Bayfront Park',
                'parking' => true,
                'water' => true,
                'bathrooms' => true,
                'position' => [
                    'lat' => 27.334327028456563,
                    'lng' => -82.52827840457272,
                ],
            ],
            [
                'title' => 'Bayfront Park',
                'video_id' => 'l_o7nBhViRQ',
                'description' => 'Ride from Bayfront Park to Payne Park',
                'parking' => true,
                'water' => true,
                'bathrooms' => true,
                'position' => [
                    'lat' => 27.33192462531072,
                    'lng' => -82.54383186392559,
                ],
            ],
        ];

        $mapPath = [
            ['lat' => 27.33431630621581, 'lng' => -82.52828108676111],
            ['lat' => 27.335597606440434, 'lng' => -82.52825761748758],
            ['lat' => 27.335622029032148, 'lng' => -82.53097670680245],
            ['lat' => 27.335620242029666, 'lng' => -82.53196308915498],
            ['lat' => 27.335432009214053, 'lng' => -82.5325665861671],
            ['lat' => 27.335255689577814, 'lng' => -82.53301719726949],
            ['lat' => 27.335124641015156, 'lng' => -82.53437171281944],
            ['lat' => 27.33495785171477, 'lng' => -82.53646920021265],
            ['lat' => 27.334969765243727, 'lng' => -82.53862033181622],
            ['lat' => 27.334903049460454, 'lng' => -82.53917554906738],
            ['lat' => 27.33474817338018, 'lng' => -82.53960202028927],
            ['lat' => 27.334593297083522, 'lng' => -82.53981927921365],
            ['lat' => 27.334128666895108, 'lng' => -82.54032621670383],
            ['lat' => 27.33381176414952, 'lng' => -82.5409404426052],
            ['lat' => 27.333480564072822, 'lng' => -82.54162440590855],
            ['lat' => 27.332880112501478, 'lng' => -82.5428233533226],
            ['lat' => 27.332379733702485, 'lng' => -82.54341612151882],
            ['lat' => 27.33192462531072, 'lng' => -82.54383186392559],
        ];

        $mapCenter = [
            'lat' => 27.332954573444702,
            'lng' => -82.53637867557983,
        ];
    @endphp


    <div>

        <div class="overflow-hidden bg-white dark:bg-gray-800 pt-10">
            <div class="container mx-auto max-w-7xl px-6 lg:flex lg:px-8">

                <nav class="flex" aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center space-x-4">
                        <li>
                            <div>
                                <a href="{{ route('home') }}"
                                    title="Florida EBike Experiences"
                                    class="dark:text-gray-300 dark:hover:text-gray-500 text-gray-700  hover:text-gray-500">
                                    <svg class="h-6 w-6 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Home</span>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                                <a href="{{ route('trails.index') }}"
                                    title="Florida Electric Bike Trails"
                                    class="ml-4 text-sm font-medium dark:text-gray-300 text-gray-700 hover:text-gray-500 dark:hover:text-gray-500">Trails</a>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                                <a href="#"
                                    title="Sarasota Bike Trails"
                                    class="ml-4 text-sm font-medium dark:text-gray-300 text-gray-700 hover:text-gray-500 dark:hover:text-gray-500"
                                    aria-current="page">Sarasota</a>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                                <a href="{{ route('trails.gateway-to-the-beaches') }}"
                                    title="Gateway to the Beaches"
                                    class="ml-4 text-sm font-medium dark:text-gray-300 text-gray-700 hover:text-gray-500 dark:hover:text-gray-500"
                                    aria-current="page">The Gateway to the Beaches</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="bg-white dark:bg-gray-800 pb-32 pt-12">
            <div class="flex items-center mx-auto max-w-7xl">
                <div class="container mx-auto max-w-7xl px-6 lg:flex lg:px-8">
                    <div class="w-full lg:shrink-0">
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-200 sm:text-3xl">Gateway
                            to
                            the Beaches
                        </h2>
                        <p
                            class="relative mt-6 md:pr-10 sm:pr-0 text-lg text-gray-600 dark:text-gray-300 sm:max-w-md lg:max-w-none">
                            One of the most enjoyable Ebike
                            routes in Sarasota, FL, takes riders on a scenic journey from Payne Park to Bayfront Park. This
                            route winds through some of the most picturesque areas in the city, offering riders stunning
                            views of the natural beauty that surrounds them.</p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="#map"
                                title="View the Payne Park to Bayfront Park Ebike Trail Map"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View
                                Map</a>
                        </div>
                    </div>
                </div>
                <div class="gap-8 w-1/2 hidden lg:flex">
                    <div class="mt-20 w-44">
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/gateway-to-the-beaches/bayfront-park.jpg') }}"
                                alt="Bayfront Park"
                                title="EBike Trail Bayfront Park"
                                class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                        <div class="mt-8">
                            <img src="{{ asset('/img/trails/gateway-to-the-beaches/payne-park-sign.jpg') }}"
                                alt="Payne Park"
                                title="EBike Trail Payne Park"
                                class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                    </div>
                    <div class="mt-10 w-44">
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/gateway-to-the-beaches/bayfront-sign.png') }}"
                                alt="Bayfront Park"
                                title="EBike Trail Sarasota"
                                class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/gateway-to-the-beaches/payne-park-main.jpg') }}"
                                alt="Payne Park"
                                title="Sarasota EBike Trail"
                                class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                    </div>
                    <div class="mt-40 w-44">
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/gateway-to-the-beaches/bayfront-entrance.jpg') }}"
                                alt="Bayfront Park"
                                title="EBike Trail to the Beaches"
                                class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="map" class="w-full">
            <trail-map api-key="{{ config('map.api_key') }}" :trail-heads="{{ json_encode($trailheads) }}"
                :path="{{ json_encode($mapPath) }}" :center="{{ json_encode($mapCenter) }}" :zoom="16" />
        </div>

        <div class="bg-gray-100 dark:bg-gray-900">
            <div class="continer mx-auto max-w-7xl py-24 sm:py-16 px-6">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">Trailheads</h2>
                <div class="mx-auto lg:mx-0 lg:max-w-none dark:text-gray-300 text-gray-700 mt-4">
                    Explore the becahes of Bayfront park and take a ride to the start of the Legacy Trail at Payne Park.
                </div>

                <div
                    class="mx-auto mt-16 grid grid-cols-1 gap-x-4 md:gap-x-6 gap-y-4 md:gap-y-6 lg:mx-0 lg:max-w-none lg:grid-cols-3 md:grid-cols-2">
                    @foreach ($trailheads as $trailhead)
                        <article
                            class="flex flex-col items-start dark:bg-gray-800 bg-white rounded-lg overflow-hidden shadow">
                            <div class="aspect-video w-full">
                                <iframe class="w-full h-full"
                                    src="https://www.youtube.com/embed/{{ $trailhead['video_id'] }}?controls=1&playlist={{ $trailhead['video_id'] }}&loop=1"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="max-w-xl p-4">
                                <div class="group relative">
                                    <div class="flex items-center justify-between mt-2">
                                        <h3 class="text-2xl font-semibold leading-6 text-gray-900 dark:text-gray-100">
                                            <span class="absolute inset-0"></span>
                                            {{ $trailhead['title'] }}
                                        </h3>
                                        <div class="flex">
                                            @if ($trailhead['bathrooms'])
                                                <div class="flex items-center ml-2">
                                                    <div class="p-1 bg-indigo-700 rounded-full">
                                                        <div class="h-6 w-6 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <title>toilet</title>
                                                                <path fill="currentColor"
                                                                    d="M9,22H17V19.5C19.41,17.87 21,15.12 21,12V4A2,2 0 0,0 19,2H15C13.89,2 13,2.9 13,4V12H3C3,15.09 5,18 9,19.5V22M5.29,14H18.71C18.14,15.91 16.77,17.5 15,18.33V20H11V18.33C9,18 5.86,15.91 5.29,14M15,4H19V12H15V4M16,5V8H18V5H16Z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($trailhead['water'])
                                                <div class="flex items-center ml-2">
                                                    <div class="p-1 bg-indigo-700 rounded-full">
                                                        <div class="h-6 w-6 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <title>water</title>
                                                                <path fill="currentColor"
                                                                    d="M12,20A6,6 0 0,1 6,14C6,10 12,3.25 12,3.25C12,3.25 18,10 18,14A6,6 0 0,1 12,20Z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($trailhead['parking'])
                                                <div class="flex items-center ml-2">
                                                    <div class="p-1 bg-indigo-700 rounded-full">
                                                        <div class="h-6 w-6 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <title>car</title>
                                                                <path fill="currentColor"
                                                                    d="M5,11L6.5,6.5H17.5L19,11M17.5,16A1.5,1.5 0 0,1 16,14.5A1.5,1.5 0 0,1 17.5,13A1.5,1.5 0 0,1 19,14.5A1.5,1.5 0 0,1 17.5,16M6.5,16A1.5,1.5 0 0,1 5,14.5A1.5,1.5 0 0,1 6.5,13A1.5,1.5 0 0,1 8,14.5A1.5,1.5 0 0,1 6.5,16M18.92,6C18.72,5.42 18.16,5 17.5,5H6.5C5.84,5 5.28,5.42 5.08,6L3,12V20A1,1 0 0,0 4,21H5A1,1 0 0,0 6,20V19H18V20A1,1 0 0,0 19,21H20A1,1 0 0,0 21,20V12L18.92,6Z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-700 dark:text-gray-300">
                                        {{ $trailhead['description'] }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>

        <div>
            <iframe class="h-screen-80 w-full"
                src="https://www.custompromotionsinc.com/flipbooks/LegacyTrail/index.html"></iframe>
        </div>

        <div>
            @include('components.ebike-cta')
        </div>
    </div>
@endsection
