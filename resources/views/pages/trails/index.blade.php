@extends('layouts.app')

@section('title', 'EBikes Florida')

@section('description',
    'Explore the benefits of electric bikes in Florida. Our site provides information and resources
    to help you make the switch to eco-friendly transportation. Learn about the latest e-bike models, regulations, and best
    practices for safe riding in the Sunshine State.')

@section('content')
    @php
        $citiesWithTrails = [
            [
                'name' => 'Sarasota',
                'trails' => [
                    [
                        'name' => 'Legacy Trail',
                        'route' => route('trails.legacy-trail'),
                        'image' => asset('img/trails/legacy-trail/south-terminus-venice.jpg'),
                        'description' => 'Where every mile tells a story of history, culture, and conservation.',
                        'length' => '10.6 miles',
                        'icon' => 'road',
                        'coming_soon' => false,
                    ],
                    [
                        'name' => 'Gateway to the beaches',
                        'route' => route('trails.gateway-to-the-beaches'),
                        'image' => asset('img/trails/gateway-to-the-beaches/bayfront-park.jpg'),
                        'description' => 'Ride from the legacy trail to the beaches.',
                        'length' => '2 miles',
                        'icon' => 'umbrella-beach',
                        'coming_soon' => false,
                    ],
                    [
                        'name' => 'The Ringling Bridge',
                        'route' => null,
                        'image' => 'https://assets.site-static.com/userFiles/547/image/DowntownSarasotaSmall.jpg',
                        'description' => 'Cross the iconic Ringling Bridge.',
                        'length' => '1.5 miles',
                        'icon' => 'bridge',
                        'coming_soon' => true,
                    ],
                ],
            ],
            // [
            //     'name' => 'Bradenton',
            //     'trails' => [
            //         [
            //             'name' => 'Robinson Preserve',
            //             'route' => null,
            //             'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/03/3c/c9/87/robinson-nature-preserve.jpg',
            //             'description' => 'Where nature meets adventure.',
            //             'length' => '10.6 miles',
            //             'icon' => 'bridge',
            //             'coming_soon' => true,
            //         ],
            //     ],
            // ],
            [
                'name' => 'Venice',
                'trails' => [
                    [
                        'name' => 'Venice Train Station',
                        'route' => null,
                        'image' => 'https://www.mustdo.com/wp-content/uploads/2016/12/Historic-Venice-Train-Depot-Tours-Venice-FL.jpg',
                        'description' => 'Where old-world charm meets modern convenience.',
                        'length' => '10.6 miles',
                        'icon' => 'railroad-light',
                        'coming_soon' => true,
                    ],
                ],
            ],
        ];
    @endphp

    <main class="bg-gray-200 dark:bg-gray-800">
        <div class="container mx-auto py-10 px-4 md:px-0">
            @foreach ($citiesWithTrails as $cityWithTrails)
                <div class="flex items-center">
                    <h3 class="text-2xl font-semibold leading-6 text-gray-900 dark:text-gray-100">
                        {{ $cityWithTrails['name'] }}
                    </h3>
                    <div class="border-b border-gray-400 dark:border-gray-600 pb-5 w-full mb-4 ml-6"></div>
                </div>

                <div>
                    <div
                        class="mx-auto mt-8 mb-16 grid grid-cols-1 gap-x-4 md:gap-x-6 gap-y-4 md:gap-y-6 lg:mx-0 lg:max-w-none lg:grid-cols-3 md:grid-cols-2">
                        @foreach ($cityWithTrails['trails'] as $trail)
                            <div>
                                <a href="{{ $trail['route'] ? $trail['route'] : '#' }}">
                                    <div
                                        class="flex flex-col items-start dark:bg-gray-900 bg-white rounded-lg overflow-hidden shadow">
                                        <div class="relative">
                                            <img class="aspect-[3/2] w-full object-cover" src="{{ $trail['image'] }}"
                                                alt="">
                                            @if ($trail['coming_soon'])
                                                <div
                                                    class="absolute top-0 right-0 w-32 h-32 bg-indigo-800 text-white text-center leading-10 triangle">
                                                    <p class="absolute top-0 right-0 text-md rotate-45 m-4 leading-5">
                                                        Coming<br>
                                                        Soon</p>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="max-w-xl p-4">
                                            <div class="group relative">
                                                <div class="flex items-center justify-between mt-2">
                                                    <h3
                                                        class="text-2xl font-semibold leading-6 text-gray-900 dark:text-gray-100">
                                                        <span class="absolute inset-0"></span>
                                                        {{ $trail['name'] }}
                                                    </h3>
                                                </div>
                                                <p
                                                    class="mt-5 line-clamp-3 text-sm leading-6 text-gray-700 dark:text-gray-300">
                                                    {{ $trail['description'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
