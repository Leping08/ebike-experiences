@extends('layouts.app')

@section('title', 'Multi-Use Legacy Trail | Paved EBike Trails in Sarasota, Florida')

@section('description', 'Discover the natural beauty of Sarasota County on The Legacy Trail. Explore scenic landscapes, wildlife areas, and attractions on an exhilarating EBike ride!')

@section('content')
    @php
        $trailheads = [
            [
                'title' => 'Ashton Trailhead',
                'video_id' => 'fh_F9yEEae8',
                'description' => 'The Ashton Trailhead is located at the intersection of Ashton Road and...',
                'parking' => true,
                'water' => true,
                'bathrooms' => false,
                'position' => [
                    'lat' => 27.276596,
                    'lng' => -82.482037,
                ],
            ],
            [
                'title' => 'Culverhouse Park',
                'video_id' => 'AS0TZPD80fQ',
                'description' => 'The Culverhouse Park Trailhead is located at the intersection of...',
                'parking' => true,
                'water' => false,
                'bathrooms' => false,
                'position' => [
                    'lat' => 27.249038,
                    'lng' => -82.475492,
                ],
            ],
            [
                'title' => 'Payne Park',
                'video_id' => 'O9CH-13SlTc',
                'description' => 'The Payne Park Trailhead is located at the intersection of...',
                'parking' => true,
                'water' => true,
                'bathrooms' => false,
                'position' => [
                    'lat' => 27.333336,
                    'lng' => -82.525669,
                ],
            ],
            [
                'title' => 'McIntosh Trailhead',
                'video_id' => 'KC8oYgzlP4Y',
                'description' => 'The McIntosh Trailhead is located at the intersection of...',
                'parking' => false,
                'water' => true,
                'bathrooms' => true,
                'position' => [
                    'lat' => 27.23801281032138,
                    'lng' => -82.47583695874043,
                ],
            ],
            [
                'title' => 'Sarasota Springs Trailhead',
                'video_id' => 'h4qiMONesNo',
                'description' => 'The Sarasota Springs Trailhead is located at the intersection of...',
                'parking' => false,
                'water' => true,
                'bathrooms' => true,
                'position' => [
                    'lat' => 27.307427883724124,
                    'lng' => -82.48890062035929,
                ],
            ],
            [
                'title' => 'Pompano Trailhead',
                'video_id' => '2bhBa_nUe28',
                'description' => 'The Pompano Trailhead is located at the intersection of...',
                'parking' => true,
                'water' => true,
                'bathrooms' => true,
                'position' => [
                    'lat' => 27.33087768815836,
                    'lng' => -82.5076394973437,
                ],
            ],
            [
                'title' => 'Osprey Junction Trailhead',
                'video_id' => 'fGmrP8C8fJU',
                'description' => 'The Pompano Trailhead is located at the intersection of...',
                'parking' => true,
                'water' => true,
                'bathrooms' => false,
                'position' => [
                    'lat' => 27.196500393592462,
                    'lng' => -82.46381693586189,
                ],
            ],
        ];

        $mapPath = [
            ['lat' => 27.101446, 'lng' => -82.4406],
            ['lat' => 27.108499, 'lng' => -82.442102],
            ['lat' => 27.108844, 'lng' => -82.44228],
            ['lat' => 27.115868, 'lng' => -82.443885],
            ['lat' => 27.119308, 'lng' => -82.444694],
            ['lat' => 27.12292, 'lng' => -82.44555],
            ['lat' => 27.126883, 'lng' => -82.446486],
            ['lat' => 27.136056, 'lng' => -82.448674],
            ['lat' => 27.138387, 'lng' => -82.449231],
            ['lat' => 27.149419, 'lng' => -82.451862],
            ['lat' => 27.168009, 'lng' => -82.456252],
            ['lat' => 27.176485, 'lng' => -82.458264],
            ['lat' => 27.196202, 'lng' => -82.462974],
            ['lat' => 27.225339, 'lng' => -82.469866],
            ['lat' => 27.237929, 'lng' => -82.472868],
            ['lat' => 27.244429, 'lng' => -82.474494],
            ['lat' => 27.249038, 'lng' => -82.475492],
            ['lat' => 27.259192, 'lng' => -82.477905],
            ['lat' => 27.269217, 'lng' => -82.480282],
            ['lat' => 27.276596, 'lng' => -82.482037],
            ['lat' => 27.280306, 'lng' => -82.482914],
            ['lat' => 27.283968, 'lng' => -82.483778],
            ['lat' => 27.291487, 'lng' => -82.48558],
            ['lat' => 27.298756, 'lng' => -82.487307],
            ['lat' => 27.308272, 'lng' => -82.489552],
            ['lat' => 27.322937, 'lng' => -82.493041], // end of second curve
            ['lat' => 27.327992, 'lng' => -82.494254],
            ['lat' => 27.328678, 'lng' => -82.494517],
            ['lat' => 27.329231, 'lng' => -82.494941],
            ['lat' => 27.329545, 'lng' => -82.495348],
            ['lat' => 27.329836, 'lng' => -82.495853],
            ['lat' => 27.330041, 'lng' => -82.496518],
            ['lat' => 27.330097, 'lng' => -82.497548], // start of second curve
            ['lat' => 27.330135, 'lng' => -82.507816],
            ['lat' => 27.330126, 'lng' => -82.514052],
            ['lat' => 27.330128, 'lng' => -82.522282], // end of the first curve
            ['lat' => 27.330348, 'lng' => -82.523491],
            ['lat' => 27.330849, 'lng' => -82.524392],
            ['lat' => 27.331421, 'lng' => -82.525095],
            ['lat' => 27.331897, 'lng' => -82.525417],
            ['lat' => 27.33255, 'lng' => -82.525632],
            ['lat' => 27.333336, 'lng' => -82.525669], // start of first curve
            ['lat' => 27.337437, 'lng' => -82.525629],
        ];

        $mapCenter = [
            'lat' => 27.276596,
            'lng' => -82.482037,
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
                                    title="Florida EBike Experiences">
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
                                <a href="{{ route('trails.legacy-trail') }}"
                                    title="The Legacy Trail Sarasota"
                                    class="ml-4 text-sm font-medium dark:text-gray-300 text-gray-700 hover:text-gray-500 dark:hover:text-gray-500"
                                    aria-current="page">The Legacy Trail</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="overflow-hidden bg-white dark:bg-gray-800 pb-32 pt-12">
            <div class="container mx-auto max-w-7xl px-6 lg:flex lg:px-8">
                <div
                    class="mx-auto grid max-w-4xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
                    <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-200 sm:text-4xl">The
                            Legacy
                            Trail
                        </h2>
                        <p class="mt-6 text-xl leading-8 text-gray-600 dark:text-gray-300">The Legacy Trail is a popular
                            multi-use trail located in Sarasota County, Florida. It is a paved trail that is open to
                            cyclists,
                            walkers, runners, and inline skaters, and is approximately 20 miles long.</p>
                        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">The trail starts at the
                            northern
                            end
                            in Sarasota and extends to the historic Venice Train Depot in Venice. The
                            trail
                            winds through scenic landscapes of natural beauty, including wetlands, parks, and wildlife
                            areas.
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">Along the way, visitors can
                            explore
                            various communities and attractions, including the Oscar Scherer State Park, the Historic Venice
                            Train Depot, and the Venice Museum and Archives. The trail is also close to various dining and
                            shopping options, making it a great destination for a day trip or weekend getaway.
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">The Legacy Trail is
                            well-maintained
                            and offers rest areas, benches, and water fountains along the way. Additionally, the trail has
                            several trailheads and parking areas, making it easily accessible to visitors.
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">Overall, The Legacy Trail is a
                            popular and scenic destination for outdoor enthusiasts, and is highly recommended for anyone
                            looking
                            to explore the natural beauty of Sarasota County while getting some exercise.
                        </p>
                        <div class="mt-10 flex">
                            <a href="#map"
                                title="View the Legacy Trail Map"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View
                                Map</a>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                        <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                            <img src="{{ asset('/img/trails/legacy-trail/trail-first-photo.jpg') }}"
                                alt="Sarasota Legacy Trail"
                                title="The Legacy Trail in Sarasota, Florida"
                                class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                        <div
                            class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                            <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                                <img src="{{ asset('/img/trails/legacy-trail/south-terminus-venice.jpg') }}"
                                    alt="Legacy Trail Venice, Florida"
                                    title="Venice EBike Trail"
                                    class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                                <img src="{{ asset('/img/trails/legacy-trail/south-creek.jpg') }}"
                                    alt="South Creek Legacy Trail"
                                    title="Electric Bike Trail Sarasota"
                                    class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                                <img src="{{ asset('/img/trails/legacy-trail/trail-shelter.jpg') }}"
                                    alt="Legacy Trail Shelter"
                                    title="Sarasota EBike Trails"
                                    class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 dark:bg-gray-900">
            <div class="continer mx-auto max-w-7xl py-24 sm:py-16 px-6">
                <div class="mx-auto max-w-4xl lg:mx-0 lg:max-w-none">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">History</h2>
                    <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                        <div class="lg:w-full lg:max-w-4xl lg:flex-auto">
                            <div class="mt-10 max-w-xl text-base leading-7 text-gray-700 dark:text-gray-300">
                                <p>The Legacy Trail is a 20 mile trail in Sarasota County that follows the scenic CSX
                                    railroad
                                    corridor, offering opportunities for recreation, historical discovery, and environmental
                                    appreciation. The restored Venice Train Depot serves as a historical resource and
                                    regional
                                    transportation hub. In 2018, voters approved a bond referendum to extend the Legacy
                                    Trail an
                                    additional 7.5 miles north to Payne Park in downtown Sarasota with a connector to the
                                    City
                                    of North Port. The grade level trail part of this extension was completed in 2022, with
                                    overpasses at Clark and Bee Ridge Roads expected to be finished by FDOT in 2024. The
                                    Venice
                                    Area Historical Society provides more information on the Venice Train Depot and the
                                    Legacy
                                    Trail corridor.</p>
                            </div>
                        </div>
                        <div class="lg:flex lg:flex-auto lg:justify-center">
                            <dl class="w-64 space-y-8 xl:w-80">
                                <div class="flex flex-col-reverse gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600 dark:text-gray-400">Miles of trails
                                    </dt>
                                    <dd class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">20+
                                    </dd>
                                </div>

                                <div class="flex flex-col-reverse gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600 dark:text-gray-400">Users every year</dt>
                                    <dd class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">
                                        650,000+
                                    </dd>
                                </div>

                                <div class="flex flex-col-reverse gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600 dark:text-gray-400"></dt>
                                    <dd class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="map" class="w-full">
            <trail-map api-key="{{ config('map.api_key') }}" :trail-heads="{{ json_encode($trailheads) }}"
                :path="{{ json_encode($mapPath) }}" :center="{{ json_encode($mapCenter) }}" :zoom="11" />
        </div>

        <div class="bg-gray-100 dark:bg-gray-900">
            <div class="continer mx-auto max-w-7xl py-24 sm:py-16 px-6">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">Trailheads</h2>
                <div class="mx-auto lg:mx-0 lg:max-w-none dark:text-gray-300 text-gray-700 mt-4">
                    Looking to explore the Legacy Trail? Check out our list of trailheads along the way!
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
