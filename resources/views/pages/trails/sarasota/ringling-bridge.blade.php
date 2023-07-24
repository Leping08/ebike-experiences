@extends('layouts.app')

@section('title', 'The Ringling Bridge Sarasota | Florida EBike Trails')

@section('description', 'EBike cyclists and pedestrians alike can enjoy the scenic coastal views from the Ringling Bridge in Sarasota, Florida.')

@section('content')
    @php
        $trailheads = [
            [
                'title' => 'Gateway to Longboat Key and the Islands',
                'video_id' => 'vB3NkOEVUhE',
                'description' => 'Ride over the Ringling Causway to the Longboat Key.',
                'parking' => true,
                'water' => true,
                'bathrooms' => true,
                'position' => [
                    'lat' => 27.318455329691236,
                    'lng' => -82.57722599182686,
                ],
            ],
            [
                'title' => 'Gateway to the Sarasota Mainland from the Islands',
                'video_id' => 'HaG9cedRqoY',
                'description' => 'Ride over the Ringling Causway to the Sarasota Mainland.',
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
            ['lat' => 27.3326182476101, 'lng' => -82.54339785242307],
            ['lat' => 27.333818179986682, 'lng' => -82.54492334467835],
            ['lat' => 27.333908336893828, 'lng' => -82.54493536754956],
            ['lat' => 27.334153162092786, 'lng' => -82.54506171179953],
            ['lat' => 27.334531248583996, 'lng' => -82.54583464441092],
            ['lat' => 27.335328625712357, 'lng' => -82.54791632665655],
            ['lat' => 27.335368947538722, 'lng' => -82.54798049534557],
            ['lat' => 27.335470884687854, 'lng' => -82.54805066680939],
            ['lat' => 27.335585288858713, 'lng' => -82.54808781640787],
            ['lat' => 27.335616823320926, 'lng' => -82.54811671054004],
            ['lat' => 27.335627090353213, 'lng' => -82.54817284771109],
            ['lat' => 27.335635890665838, 'lng' => -82.54821990386918],
            ['lat' => 27.335620490119037, 'lng' => -82.5488729113122],
            ['lat' => 27.335597755973495, 'lng' => -82.54901573087973],
            ['lat' => 27.335583088780393, 'lng' => -82.54935172839144],
            ['lat' => 27.33558162206152, 'lng' => -82.54989328700978],
            ['lat' => 27.335647530318376, 'lng' => -82.54990049679328],
            ['lat' => 27.335932857232006, 'lng' => -82.54982405383731],
            ['lat' => 27.335892947248947, 'lng' => -82.55029813425097],
            ['lat' => 27.33586435501337, 'lng' => -82.55067900793497],
            ['lat' => 27.33582921037942, 'lng' => -82.55108335095962],
            ['lat' => 27.335749390323105, 'lng' => -82.55156346636605],
            ['lat' => 27.335587367345425, 'lng' => -82.55220250264655],
            ['lat' => 27.335346119456265, 'lng' => -82.55285092669179],
            ['lat' => 27.335053047240763, 'lng' => -82.55340547340492],
            ['lat' => 27.334683131814934, 'lng' => -82.55395331459256],
            ['lat' => 27.33434137812535, 'lng' => -82.55435357136507],
            ['lat' => 27.333857633289238, 'lng' => -82.55481998743184],
            ['lat' => 27.330172690290667, 'lng' => -82.55809910549557],
            ['lat' => 27.328327584797652, 'lng' => -82.55972845237667],
            ['lat' => 27.328005207633105, 'lng' => -82.56005480851522],
            ['lat' => 27.32785044604562, 'lng' => -82.56023797142178],
            ['lat' => 27.327503779294194, 'lng' => -82.5607197695508],
            ['lat' => 27.327280037174848, 'lng' => -82.56111197707901],
            ['lat' => 27.326963436875882, 'lng' => -82.56169332027106],
            ['lat' => 27.32686881035125, 'lng' => -82.5618655332457],
            ['lat' => 27.326922756321014, 'lng' => -82.56198399186462],
            ['lat' => 27.327035069977125, 'lng' => -82.5620566597569],
            ['lat' => 27.326897109879642, 'lng' => -82.56230452695112],
            ['lat' => 27.326789871953043, 'lng' => -82.56245021676368],
            ['lat' => 27.32666257406031, 'lng' => -82.56263620223406],
            ['lat' => 27.326603425494767, 'lng' => -82.56275199085377],
            ['lat' => 27.326541705215707, 'lng' => -82.56288514779084],
            ['lat' => 27.326483842425798, 'lng' => -82.56300817319926],
            ['lat' => 27.326436909251814, 'lng' => -82.56306751486687],
            ['lat' => 27.326310896791252, 'lng' => -82.56315797473856],
            ['lat' => 27.326187203257664, 'lng' => -82.56332032298124],
            ['lat' => 27.3261169078449, 'lng' => -82.56350807760053],
            ['lat' => 27.32605376108014, 'lng' => -82.56363414141632],
            ['lat' => 27.325934616135157, 'lng' => -82.5637950739912],
            ['lat' => 27.32580593945935, 'lng' => -82.56390504455392],
            ['lat' => 27.32574279251358, 'lng' => -82.56403379060043],
            ['lat' => 27.32561888142891, 'lng' => -82.56435967897531],
            ['lat' => 27.32556943610177, 'lng' => -82.56446763788144],
            ['lat' => 27.32541514270993, 'lng' => -82.56473719987052],
            ['lat' => 27.32536867592757, 'lng' => -82.56482370113214],
            ['lat' => 27.32393229028842, 'lng' => -82.56747663894603],
            ['lat' => 27.323847895600636, 'lng' => -82.56763933445542],
            ['lat' => 27.323743409851108, 'lng' => -82.56784488290535],
            ['lat' => 27.323379120920702, 'lng' => -82.56851450471015],
            ['lat' => 27.323251101786287, 'lng' => -82.56867025535541],
            ['lat' => 27.323105197449717, 'lng' => -82.56893937549087],
            ['lat' => 27.319977289427694, 'lng' => -82.57472104761796],
            ['lat' => 27.318998568237326, 'lng' => -82.57663114908641],
            ['lat' => 27.318972326620102, 'lng' => -82.5766658395429],
            ['lat' => 27.3188054449545, 'lng' => -82.5766382559356],
            ['lat' => 27.318733090587877, 'lng' => -82.576667153048],
            ['lat' => 27.318681742299077, 'lng' => -82.57676566593122],
        ];

        $mapCenter = [
            'lat' => 27.32632267424616,
            'lng' => -82.55795848311459,
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
                                <a href="{{ route('trails.index') }}" title="Sarasota Bike Trails"
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
                                <a href="{{ route('trails.sarasota.ringling-bridge') }}"
                                    title="The Ringling Bridge EBike Trail"
                                    class="ml-4 text-sm font-medium dark:text-gray-300 text-gray-700 hover:text-gray-500 dark:hover:text-gray-500"
                                    aria-current="page">The Ringling Bridge</a>
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
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-200 sm:text-3xl">The
                            Ringling Bridge</h2>
                        <div class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">
                            <p>
                                As you embark on your bike ride from Bayfront Park, the air is thick with the salty aroma of
                                the Gulf of Mexico. Beginning your journey amidst the lush, palm-dotted greenery of the
                                park, you have a front-row view of Sarasota Bay, its serene blue waters glistening under the
                                Florida sunshine. The park, brimming with its vibrant wildlife, creates a beautiful backdrop
                                for your ride. Cyclists and pedestrians alike can enjoy the scenic coastal views, the many
                                eye-catching artworks dotted around the park, and the iconic Unconditional Surrender statue
                                standing tall near the bay.
                            </p>
                        </div>
                        <div class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">
                            <p>
                                The ride continues onto the John Ringling Causeway, a 65 foot tall bridge providing an
                                exhilarating incline, and a thrilling descent with a panorama of Sarasota's skyline and the
                                sparkling waters of Sarasota Bay. As you crest the causeway, the views on each side are a
                                breathtaking blend of blue sky merging seamlessly with the bay. At the end of the
                                causeway, the route brings you to Lido Key, a barrier island off the coast of Sarasota. Upon
                                arrival at Lido Key Beach, you are met with the soothing rhythm of waves washing up on the
                                pristine white sand and the rustle of sea oats swaying in the breeze. Its tranquil setting,
                                picturesque views, and abundant wildlife make it an idyllic destination to conclude your
                                journey.
                            </p>
                        </div>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="#map" title="Ringling Bridge Trail Map"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View
                                Map</a>
                        </div>
                    </div>
                </div>
                <div class="gap-8 w-1/2 hidden lg:flex">
                    <div class="mt-20 w-44">
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/ringling-bridge/lights.jpg') }}" alt="Ringling Bridge Night"
                                title="Ringling Bridge Sarasota"
                                class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/ringling-bridge/path-up.webp') }}"
                                alt="Ringling Bridge EBike Path" title="Sarasota EBike Path"
                                class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                    </div>
                    <div class="mt-10 w-44">
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/ringling-bridge/sunset.jpg') }}" alt="Ringling Bridge at Sunset" title="Electric Bike Bridge Sarasota"
                                class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/ringling-bridge/lido-key-beach.jpg') }}" alt="Lido Beach"
                                title="Sarasota Beaches" class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                    </div>
                    <div class="mt-40 w-44">
                        <div class="mt-8">
                            <img src="{{ asset('img/trails/ringling-bridge/st-armands-circle-aerial.jpg') }}" alt="St. Armands Circle"
                                title="EBike Trail St. Armands" class="aspect-[2/3] w-full rounded-xl object-cover shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="map" class="w-full">
            <trail-map api-key="{{ config('map.api_key') }}" :trail-heads="{{ json_encode($trailheads) }}"
                :path="{{ json_encode($mapPath) }}" :center="{{ json_encode($mapCenter) }}" :zoom="14" />
        </div>

        <div class="bg-gray-100 dark:bg-gray-900">
            <div class="continer mx-auto max-w-7xl py-24 sm:py-16 px-6">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">Trailheads</h2>
                <div class="mx-auto lg:mx-0 lg:max-w-none dark:text-gray-300 text-gray-700 mt-4">
                    Explore the beaches of Bayfront Park and take a ride across the Ringling Bridge.
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
