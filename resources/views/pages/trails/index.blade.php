@extends('layouts.app')

@section('title', 'EBikes Florida')

@section('description',
    'Explore the benefits of electric bikes in Florida. Our site provides information and resources
    to help you make the switch to eco-friendly transportation. Learn about the latest e-bike models, regulations, and best
    practices for safe riding in the Sunshine State.')

@section('content')
    <main class="bg-gray-200 dark:bg-gray-800">
        <div class="container mx-auto py-10">

            <div class="overflow-hidden bg-white dark:bg-gray-900 shadow rounded-md">
                <div class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-5 sm:px-6">
                    <h3 class="text-base font-semibold leading-6 text-gray-900 dark:text-gray-100">Sarasota</h3>
                </div>
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li>
                        <a href="{{ route('trails.legacy-trail') }}" class="block hover:bg-gray-50 dark:hover:bg-gray-950 bg-white dark:bg-gray-900">
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="flex min-w-0 flex-1 items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://upload.wikimedia.org/wikipedia/commons/4/46/Legacy_Trail_South_Terminus_at_Venice.jpg"
                                            alt="">
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                            <p class="truncate text-sm font-medium text-indigo-600 dark:text-indigo-400">The Legacy Trail
                                            </p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-1.5 h-5 w-5 flex-shrink-0">
                                                    <title>road-variant</title>
                                                    <path d="M18.1,4.8C18,4.3 17.6,4 17.1,4H13L13.2,7H10.8L11,4H6.8C6.3,4 5.9,4.4 5.8,4.8L3.1,18.8C3,19.4 3.5,20 4.1,20H10L10.3,15H13.7L14,20H19.8C20.4,20 20.9,19.4 20.8,18.8L18.1,4.8M10.4,13L10.6,9H13.2L13.4,13H10.4Z" />
                                                </svg>

                                                <span class="truncate">Where every mile tells a story of history, culture,
                                                    and conservation.</span>
                                            </p>
                                        </div>
                                        <div class="hidden md:flex items-center">
                                            <div>
                                                <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor"
                                                        class="mr-1.5 h-5 w-5 flex-shrink-0 text-indigo-500">
                                                        <title>map-marker-distance</title>
                                                        <path
                                                            d="M6.5,8.11C5.61,8.11 4.89,7.39 4.89,6.5A1.61,1.61 0 0,1 6.5,4.89C7.39,4.89 8.11,5.61 8.11,6.5V6.5A1.61,1.61 0 0,1 6.5,8.11M6.5,2C4,2 2,4 2,6.5C2,9.87 6.5,14.86 6.5,14.86C6.5,14.86 11,9.87 11,6.5C11,4 9,2 6.5,2M17.5,8.11A1.61,1.61 0 0,1 15.89,6.5C15.89,5.61 16.61,4.89 17.5,4.89C18.39,4.89 19.11,5.61 19.11,6.5A1.61,1.61 0 0,1 17.5,8.11M17.5,2C15,2 13,4 13,6.5C13,9.87 17.5,14.86 17.5,14.86C17.5,14.86 22,9.87 22,6.5C22,4 20,2 17.5,2M17.5,16C16.23,16 15.1,16.8 14.68,18H9.32C8.77,16.44 7.05,15.62 5.5,16.17C3.93,16.72 3.11,18.44 3.66,20C4.22,21.56 5.93,22.38 7.5,21.83C8.35,21.53 9,20.85 9.32,20H14.69C15.24,21.56 16.96,22.38 18.5,21.83C20.08,21.28 20.9,19.56 20.35,18C19.92,16.8 18.78,16 17.5,16V16M17.5,20.5A1.5,1.5 0 0,1 16,19A1.5,1.5 0 0,1 17.5,17.5A1.5,1.5 0 0,1 19,19A1.5,1.5 0 0,1 17.5,20.5Z" />
                                                    </svg>
                                                    20 Miles
                                                </p>
                                                {{-- <p class="mt-2 text-sm text-gray-500">
                                                    Applied on
                                                    <time datetime="2020-01-07">January 7, 2020</time>
                                                </p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="block hover:bg-gray-50 dark:hover:bg-gray-950 bg-white dark:bg-gray-900">
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="flex min-w-0 flex-1 items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=896&q=80"
                                            alt="">
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                            <p class="truncate text-sm font-medium text-indigo-600 dark:text-indigo-400">Gateway to the beaches
                                            </p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="mr-1.5 h-5 w-5 flex-shrink-0">
                                                    <title>umbrella-beach</title>
                                                    <path
                                                        d="M13.13 14.56L14.56 13.13L21 19.57L19.57 21L13.13 14.56M17.42 8.83L20.28 5.97C16.33 2 9.93 2 6 5.95C9.91 4.65 14.29 5.7 17.42 8.83M5.95 6C2 9.93 2 16.33 5.97 20.28L8.83 17.42C5.7 14.29 4.65 9.91 5.95 6M5.97 5.96L5.96 5.97C5.58 9 7.13 12.85 10.26 16L16 10.26C12.86 7.13 9 5.58 5.97 5.96Z" />
                                                </svg>
                                                <span class="truncate">Ride from the legacy trail to the beaches.</span>
                                            </p>
                                        </div>
                                        <div class="hidden md:flex items-center">
                                            <div>
                                                <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor"
                                                        class="mr-1.5 h-5 w-5 flex-shrink-0 text-indigo-500">
                                                        <title>map-marker-distance</title>
                                                        <path
                                                            d="M6.5,8.11C5.61,8.11 4.89,7.39 4.89,6.5A1.61,1.61 0 0,1 6.5,4.89C7.39,4.89 8.11,5.61 8.11,6.5V6.5A1.61,1.61 0 0,1 6.5,8.11M6.5,2C4,2 2,4 2,6.5C2,9.87 6.5,14.86 6.5,14.86C6.5,14.86 11,9.87 11,6.5C11,4 9,2 6.5,2M17.5,8.11A1.61,1.61 0 0,1 15.89,6.5C15.89,5.61 16.61,4.89 17.5,4.89C18.39,4.89 19.11,5.61 19.11,6.5A1.61,1.61 0 0,1 17.5,8.11M17.5,2C15,2 13,4 13,6.5C13,9.87 17.5,14.86 17.5,14.86C17.5,14.86 22,9.87 22,6.5C22,4 20,2 17.5,2M17.5,16C16.23,16 15.1,16.8 14.68,18H9.32C8.77,16.44 7.05,15.62 5.5,16.17C3.93,16.72 3.11,18.44 3.66,20C4.22,21.56 5.93,22.38 7.5,21.83C8.35,21.53 9,20.85 9.32,20H14.69C15.24,21.56 16.96,22.38 18.5,21.83C20.08,21.28 20.9,19.56 20.35,18C19.92,16.8 18.78,16 17.5,16V16M17.5,20.5A1.5,1.5 0 0,1 16,19A1.5,1.5 0 0,1 17.5,17.5A1.5,1.5 0 0,1 19,19A1.5,1.5 0 0,1 17.5,20.5Z" />
                                                    </svg>
                                                    10 Miles
                                                </p>
                                                {{-- <p class="mt-2 text-sm text-gray-500">
                                                    Applied on
                                                    <time datetime="2020-01-07">January 7, 2020</time>
                                                </p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="block hover:bg-gray-50 dark:hover:bg-gray-950 bg-white dark:bg-gray-900">
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="flex min-w-0 flex-1 items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://assets.site-static.com/userFiles/547/image/DowntownSarasotaSmall.jpg"
                                            alt="">
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                            <p class="truncate text-sm font-medium text-indigo-600 dark:text-indigo-400">The Ringling Bridge</p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="mr-1.5 h-5 w-5 flex-shrink-0">
                                                    <title>bridge</title>
                                                    <path
                                                        d="M7,14V10.91C6.28,10.58 5.61,10.18 5,9.71V14H7M5,18H3V16H1V14H3V7H5V8.43C6.8,10 9.27,11 12,11C14.73,11 17.2,10 19,8.43V7H21V14H23V16H21V18H19V16H5V18M17,10.91V14H19V9.71C18.39,10.18 17.72,10.58 17,10.91M16,14V11.32C15.36,11.55 14.69,11.72 14,11.84V14H16M13,14V11.96L12,12L11,11.96V14H13M10,14V11.84C9.31,11.72 8.64,11.55 8,11.32V14H10Z" />
                                                </svg>
                                                <span class="truncate">Corss the iconic Ringling Bridge.</span>
                                            </p>
                                        </div>
                                        <div class="hidden md:flex items-center">
                                            <div>
                                                <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor"
                                                        class="mr-1.5 h-5 w-5 flex-shrink-0 text-indigo-500">
                                                        <title>map-marker-distance</title>
                                                        <path
                                                            d="M6.5,8.11C5.61,8.11 4.89,7.39 4.89,6.5A1.61,1.61 0 0,1 6.5,4.89C7.39,4.89 8.11,5.61 8.11,6.5V6.5A1.61,1.61 0 0,1 6.5,8.11M6.5,2C4,2 2,4 2,6.5C2,9.87 6.5,14.86 6.5,14.86C6.5,14.86 11,9.87 11,6.5C11,4 9,2 6.5,2M17.5,8.11A1.61,1.61 0 0,1 15.89,6.5C15.89,5.61 16.61,4.89 17.5,4.89C18.39,4.89 19.11,5.61 19.11,6.5A1.61,1.61 0 0,1 17.5,8.11M17.5,2C15,2 13,4 13,6.5C13,9.87 17.5,14.86 17.5,14.86C17.5,14.86 22,9.87 22,6.5C22,4 20,2 17.5,2M17.5,16C16.23,16 15.1,16.8 14.68,18H9.32C8.77,16.44 7.05,15.62 5.5,16.17C3.93,16.72 3.11,18.44 3.66,20C4.22,21.56 5.93,22.38 7.5,21.83C8.35,21.53 9,20.85 9.32,20H14.69C15.24,21.56 16.96,22.38 18.5,21.83C20.08,21.28 20.9,19.56 20.35,18C19.92,16.8 18.78,16 17.5,16V16M17.5,20.5A1.5,1.5 0 0,1 16,19A1.5,1.5 0 0,1 17.5,17.5A1.5,1.5 0 0,1 19,19A1.5,1.5 0 0,1 17.5,20.5Z" />
                                                    </svg>
                                                    1.5 Miles
                                                </p>
                                                {{-- <p class="mt-2 text-sm text-gray-500">
                                                    Bike lanes
                                                </p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="overflow-hidden bg-white dark:bg-gray-900 shadow rounded-md mt-10">
                <div class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-5 sm:px-6">
                    <h3 class="text-base font-semibold leading-6 text-gray-900 dark:text-gray-100">Bradenton</h3>
                </div>
                <ul role="list" class="divide-y divide-gray-200">
                    <li>
                        <a href="#" class="block hover:bg-gray-50 dark:hover:bg-gray-950 bg-white dark:bg-gray-900">
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="flex min-w-0 flex-1 items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://lh3.googleusercontent.com/p/AF1QipMYD0ZVHQwv90gwpd_uw2_LClHsR0RRjOK1k3Lh=s680-w680-h510"
                                            alt="">
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                            <p class="truncate text-sm font-medium text-indigo-600 dark:text-indigo-400">Robinson Preserve</p>
                                            </p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="mr-1.5 h-5 w-5 flex-shrink-0">
                                                    <title>forest</title>
                                                    <path
                                                        d="M16 12L9 2L2 12H3.86L0 18H7V22H11V18H18L14.14 12H16M20.14 12H22L15 2L12.61 5.41L17.92 13H15.97L19.19 18H24L20.14 12M13 19H17V22H13V19Z" />
                                                </svg>
                                                <span class="truncate">Where nature meets adventure.</span>
                                            </p>
                                        </div>
                                        <div class="hidden md:flex items-center">
                                            <div>
                                                <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor"
                                                        class="mr-1.5 h-5 w-5 flex-shrink-0 text-indigo-500">
                                                        <title>map-marker-distance</title>
                                                        <path
                                                            d="M6.5,8.11C5.61,8.11 4.89,7.39 4.89,6.5A1.61,1.61 0 0,1 6.5,4.89C7.39,4.89 8.11,5.61 8.11,6.5V6.5A1.61,1.61 0 0,1 6.5,8.11M6.5,2C4,2 2,4 2,6.5C2,9.87 6.5,14.86 6.5,14.86C6.5,14.86 11,9.87 11,6.5C11,4 9,2 6.5,2M17.5,8.11A1.61,1.61 0 0,1 15.89,6.5C15.89,5.61 16.61,4.89 17.5,4.89C18.39,4.89 19.11,5.61 19.11,6.5A1.61,1.61 0 0,1 17.5,8.11M17.5,2C15,2 13,4 13,6.5C13,9.87 17.5,14.86 17.5,14.86C17.5,14.86 22,9.87 22,6.5C22,4 20,2 17.5,2M17.5,16C16.23,16 15.1,16.8 14.68,18H9.32C8.77,16.44 7.05,15.62 5.5,16.17C3.93,16.72 3.11,18.44 3.66,20C4.22,21.56 5.93,22.38 7.5,21.83C8.35,21.53 9,20.85 9.32,20H14.69C15.24,21.56 16.96,22.38 18.5,21.83C20.08,21.28 20.9,19.56 20.35,18C19.92,16.8 18.78,16 17.5,16V16M17.5,20.5A1.5,1.5 0 0,1 16,19A1.5,1.5 0 0,1 17.5,17.5A1.5,1.5 0 0,1 19,19A1.5,1.5 0 0,1 17.5,20.5Z" />
                                                    </svg>
                                                    7.5 Miles
                                                </p>
                                                {{-- <p class="mt-2 text-sm text-gray-500">
                                                    Applied on
                                                    <time datetime="2020-01-07">January 7, 2020</time>
                                                </p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="overflow-hidden bg-white dark:bg-gray-900 shadow rounded-md mt-10">
                <div class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-5 sm:px-6">
                    <h3 class="text-base font-semibold leading-6 text-gray-900 dark:text-gray-100">Venice</h3>
                </div>
                <ul role="list" class="divide-y divide-gray-200">
                    <li>
                        <a href="#" class="block hover:bg-gray-50 dark:hover:bg-gray-950 bg-white dark:bg-gray-900">
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="flex min-w-0 flex-1 items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://www.mustdo.com/wp-content/uploads/2016/12/Historic-Venice-Train-Depot-Tours-Venice-FL.jpg"
                                            alt="">
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                            <p class="truncate text-sm font-medium text-indigo-600 dark:text-indigo-400">Venice Train Station
                                            </p>
                                            </p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-400">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="mr-1.5 h-5 w-5 flex-shrink-0"
                                                    fill="currentColor">
                                                    <title>railroad-light</title>
                                                    <path
                                                        d="M17.67,10.5C16.4,10.5 15.27,11.3 14.85,12.5H13.17V7.77L16.66,9.86L17.66,8.14L14.11,6L17.68,3.86L16.68,2.14L13.17,4.23V2H11.17V4.23L7.68,2.14L6.68,3.86L10.23,6L6.66,8.14L7.66,9.86L11.17,7.77V12.5H9.5C8.36,9.32 3.66,10.13 3.66,13.5C3.66,16.87 8.36,17.68 9.5,14.5H11.17V20A2,2 0 0,0 9.17,22H15.17A2,2 0 0,0 13.17,20V14.5H14.85C15.66,16.8 18.73,17.22 20.13,15.23C21.53,13.24 20.1,10.5 17.67,10.5M6.67,14.5C5.78,14.5 5.33,13.42 5.96,12.79C6.59,12.16 7.67,12.61 7.67,13.5A1,1 0 0,1 6.67,14.5M17.67,14.5C16.78,14.5 16.33,13.42 16.96,12.79C17.59,12.16 18.67,12.61 18.67,13.5A1,1 0 0,1 17.67,14.5Z" />
                                                </svg>
                                                <span class="truncate">Where old-world charm meets modern
                                                    convenience.</span>
                                            </p>
                                        </div>
                                        <div class="hidden md:flex items-center">
                                            <div>
                                                <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor"
                                                        class="mr-1.5 h-5 w-5 flex-shrink-0 text-indigo-500">
                                                        <title>map-marker-distance</title>
                                                        <path
                                                            d="M6.5,8.11C5.61,8.11 4.89,7.39 4.89,6.5A1.61,1.61 0 0,1 6.5,4.89C7.39,4.89 8.11,5.61 8.11,6.5V6.5A1.61,1.61 0 0,1 6.5,8.11M6.5,2C4,2 2,4 2,6.5C2,9.87 6.5,14.86 6.5,14.86C6.5,14.86 11,9.87 11,6.5C11,4 9,2 6.5,2M17.5,8.11A1.61,1.61 0 0,1 15.89,6.5C15.89,5.61 16.61,4.89 17.5,4.89C18.39,4.89 19.11,5.61 19.11,6.5A1.61,1.61 0 0,1 17.5,8.11M17.5,2C15,2 13,4 13,6.5C13,9.87 17.5,14.86 17.5,14.86C17.5,14.86 22,9.87 22,6.5C22,4 20,2 17.5,2M17.5,16C16.23,16 15.1,16.8 14.68,18H9.32C8.77,16.44 7.05,15.62 5.5,16.17C3.93,16.72 3.11,18.44 3.66,20C4.22,21.56 5.93,22.38 7.5,21.83C8.35,21.53 9,20.85 9.32,20H14.69C15.24,21.56 16.96,22.38 18.5,21.83C20.08,21.28 20.9,19.56 20.35,18C19.92,16.8 18.78,16 17.5,16V16M17.5,20.5A1.5,1.5 0 0,1 16,19A1.5,1.5 0 0,1 17.5,17.5A1.5,1.5 0 0,1 19,19A1.5,1.5 0 0,1 17.5,20.5Z" />
                                                    </svg>
                                                    7.5 Miles
                                                </p>
                                                {{-- <p class="mt-2 text-sm text-gray-500">
                                                    Applied on
                                                    <time datetime="2020-01-07">January 7, 2020</time>
                                                </p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </main>
@endsection
