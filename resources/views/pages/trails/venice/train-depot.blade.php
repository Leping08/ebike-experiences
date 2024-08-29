@extends('layouts.app')

@section('title', 'Venice Train Depot EBike Trail | Best Trails for EBikes near Sarasota')

@section('description', 'Discover the Legacy Trail and the infamous Venice Train Depot, a scenic rail-trail connecting
    Venice to Sarasota, offering a serene route for walkers, joggers, and EBike riders of the Suncoast.')

@section('content')
    @php
        $trailheads = [
            [
                'title' => 'Venice Train Depot',
                'video_id' => 'kN2joKbhKec',
                'description' => 'The Venice Train Depot is the southern terminus of the Legacy Trail. It is located in the heart of downtown Venice, Florida. The Depot is a historic landmark and is listed on the National Register of Historic Places. The train Depot is also the home of the Venice Area Historical Society.',
                'parking' => true,
                'water' => true,
                'bathrooms' => true,
                'position' => [
                    'lat' => 27.1009581,
                    'lng' => -82.4401363,
                ],
            ],
        ];

        $mapPath = [
            ['lat' => 27.103092607565923, 'lng' => -82.44084470365605],
            ['lat' => 27.102499479621873, 'lng' => -82.44070589257092],
            ['lat' => 27.102381725894173, 'lng' => -82.44069119493172],
            ['lat' => 27.102176746908455, 'lng' => -82.44075161858056],
            ['lat' => 27.10213749557049, 'lng' => -82.4407597839385],
            ['lat' => 27.10210696674257, 'lng' => -82.44075325165214],
            ['lat' => 27.10185837454819, 'lng' => -82.44069772721808],
            ['lat' => 27.10172402833545, 'lng' => -82.4406725323028],
            ['lat' => 27.100805891349047, 'lng' => -82.44044375580518],
            ['lat' => 27.100164312196206, 'lng' => -82.4402605928986],
            ['lat' => 27.09998046314911, 'lng' => -82.44016885674748], // End of legacy trail
            ['lat' => 27.099974493805995, 'lng' => -82.440094425452],
            ['lat' => 27.100007922123307, 'lng' => -82.44009308434758],
            ['lat' => 27.099990720041376, 'lng' => -82.43817210835005],
            ['lat' => 27.099901776804234, 'lng' => -82.43819423657304],
            ['lat' => 27.099904164543066, 'lng' => -82.43802525741569],
            ['lat' => 27.09988685343539, 'lng' => -82.43802659852011], // The start of venice ave
            ['lat' => 27.099882461130466, 'lng' => -82.4381692012263],
            ['lat' => 27.099913192430993, 'lng' => -82.44293226475124],
            ['lat' => 27.09991733262065, 'lng' => -82.44320642979967],
            ['lat' => 27.099938225330803, 'lng' => -82.44320441814303],
            ['lat' => 27.09993165905088, 'lng' => -82.44310048255022],
            ['lat' => 27.100029556275125, 'lng' => -82.4431105408334],
            ['lat' => 27.10003614082871, 'lng' => -82.44414880905246],
            ['lat' => 27.10001927439372, 'lng' => -82.44448838906256],
            ['lat' => 27.100055662551583, 'lng' => -82.44985967011255],
            ['lat' => 27.100053561350343, 'lng' => -82.45023003516359],
            ['lat' => 27.10006940011351, 'lng' => -82.45024956584955],
            ['lat' => 27.100070289289988, 'lng' => -82.45134531351509],
            ['lat' => 27.10017296185929, 'lng' => -82.45134263130623],
            ['lat' => 27.100174752659075, 'lng' => -82.45148814113617],
            ['lat' => 27.10015418771526, 'lng' => -82.45164213362841],
            ['lat' => 27.100190246647543, 'lng' => -82.45188875831653],
            ['lat' => 27.10019761297221, 'lng' => -82.45391107912997],
            ['lat' => 27.10017318295733, 'lng' => -82.45404112088657],
            ['lat' => 27.100172206491468, 'lng' => -82.45417055414875],
            ['lat' => 27.10020442986121, 'lng' => -82.45428024335396],
            ['lat' => 27.100225376608254, 'lng' => -82.45712770007587],
            ['lat' => 27.100219010817494, 'lng' => -82.45717098229363],
            ['lat' => 27.10023927423493, 'lng' => -82.45938902266573],
            ['lat' => 27.100236200904074, 'lng' => -82.45952805570391],
            ['lat' => 27.100137461757768, 'lng' => -82.45965809576246],
            ['lat' => 27.099982883746936, 'lng' => -82.45966956988528],
            ['lat' => 27.099992588384872, 'lng' => -82.4601165748222],
        ];

        $mapCenter = [
            'lat' => 27.1009581,
            'lng' => -82.4401363,
        ];
    @endphp


    <div>
        <div class="overflow-hidden bg-white dark:bg-gray-800 pt-10">
            <div class="container mx-auto max-w-7xl px-6 lg:flex lg:px-8">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center space-x-4">
                        <li>
                            <div>
                                <a href="{{ route('home') }}" title="Florida EBike Experiences"
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
                                <a href="{{ route('trails.index') }}" title="Florida Electric Bike Trails"
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
                                <a href="{{ route('trails.index') }}" title="Venice Bike Trails"
                                    class="ml-4 text-sm font-medium dark:text-gray-300 text-gray-700 hover:text-gray-500 dark:hover:text-gray-500"
                                    aria-current="page">Venice</a>
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
                                <a href="{{ route('trails.venice.train-depot') }}" title="Venice Train Depot"
                                    class="ml-4 text-sm font-medium dark:text-gray-300 text-gray-700 hover:text-gray-500 dark:hover:text-gray-500"
                                    aria-current="page">Train Depot</a>
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
                            Venice Train Depot
                        </h2>
                        <div class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">
                            <p>
                                Adjacent to the Venice Train Depot is a popular multi-use path known as the Legacy Trail.
                                This trail, stretching over 19 miles from Venice to Sarasota, is a paved former railway line
                                that offers a serene and scenic route for walkers, joggers, and cyclists alike. A prime
                                example of "rail-trail" projects, the Legacy Trail is an initiative to repurpose disused
                                railway lines for public recreational use, promoting both exercise and ecological
                                preservation.
                            </p>
                        </div>
                        <div class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">
                            <p>
                                In a mere ten minutes, your bicycle carries you from the Venice Train Depot through the very
                                heart of downtown Venice. The ride is a whirlwind tour of the city's urban character,
                                gliding past quaint boutiques, the sizzle of street food, and a symphony of everyday moments
                                that make up the area's vibrant mosaic. The journey culminates with the arrival at the
                                tranquil Venice Beach, where the city's energy surrenders to the soothing rhythm of the
                                ocean waves.
                            </p>
                        </div>
                        <div class="mt-10 flex">
                            <a href="#map" title="View the Venice Trail Map"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View
                                Map</a>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                        <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                            <img src="{{ asset('img/trails/venice-train-depot/train-depot-aerial.jpg') }}"
                                alt="Venice Legacy Trail" title="The Legacy Trail in Venice, Florida"
                                class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                        <div
                            class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                            <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                                <img src="{{ asset('img/trails/venice-train-depot/circus-train-car-museum.jpg') }}"
                                    alt="Legacy Trail Venice, Florida" title="Venice EBike Trail"
                                    class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                                <img src="{{ asset('img/trails/venice-train-depot/venice-pier.jpg') }}"
                                    alt="Venice Legacy Trail" title="Electric Bike Trail Sarasota"
                                    class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                                <img src="{{ asset('img/trails/venice-train-depot/venice-sign.jpg') }}"
                                    alt="Legacy Trail Venice, Florida" title="Sarasota EBike Trails"
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
                                <p>Constructed in 1927 by the Brotherhood of Locomotive Engineers, the Depot emerged as the
                                    southern gem of the Seaboard Air Line Railway, marking the southernmost stop in a rail
                                    line that threaded through Tampa, St. Petersburg, and Sarasota. As a focal point during
                                    the Florida land boom, the Depot swiftly evolved beyond its original purpose as a
                                    transportation hub, becoming a gateway for new settlers. However, the last passenger
                                    train departed in 1971, and the Depot was ultimately abandoned by the Seaboard Coast
                                    Line Railroad, the successor to the Seaboard Air Line, in 1992. Despite this, Sarasota
                                    County recognized the Depot's historical significance, purchasing and restoring it to
                                    its past splendor in 2003. Today, the fully revived train station stands as a testament
                                    to Venice's rich history, serving as both a community gathering place and a museum
                                    adorned with exhibits that recount the area's unique past.</p>
                            </div>
                        </div>
                        <div class="lg:flex lg:flex-auto lg:justify-center">
                            <dl class="w-64 space-y-8 xl:w-80">
                                <div class="flex flex-col-reverse gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600 dark:text-gray-400">Constructed
                                    </dt>
                                    <dd class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">1927
                                    </dd>
                                </div>

                                <div class="flex flex-col-reverse gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600 dark:text-gray-400">Restored</dt>
                                    <dd class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">
                                        2003
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
                :path="{{ json_encode($mapPath) }}" :center="{{ json_encode($mapCenter) }}" :zoom="15" />
        </div>

        <div class="bg-gray-100 dark:bg-gray-900">
            <div class="continer mx-auto max-w-7xl py-24 sm:py-16 px-6">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">Trailheads</h2>
                <div class="mx-auto lg:mx-0 lg:max-w-none dark:text-gray-300 text-gray-700 mt-4">
                    Looking to explore the Venice Train Depot? Check out our list of trailheads along the way!
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
