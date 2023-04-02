@php
    $nav = [['name' => 'Home', 'href' => route('home')], ['name' => 'About', 'href' => route('about')], ['name' => 'Contact', 'href' => route('contact')]];
@endphp

{{-- @todo wire up mobile nav bar state --}}
{{-- @todo add toggle for dark state --}}
<header class="bg-white dark:bg-gray-900">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                    alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-600 dark:text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            @foreach ($nav as $item)
                <a href="{{ $item['href'] }}"
                    class="text-sm font-semibold leading-6 text-gray-900 dark:text-white dark:hover:text-gray-200 hover:text-gray-700">{{ $item['name'] }}</a>
            @endforeach
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Log in <span
                    aria-hidden="true">&rarr;</span></a> --}}
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                        alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 dark:text-gray-400 text-gray-600">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        @foreach ($nav as $item)
                            <a href="{{ $item['href'] }}"
                                class="-m-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 dark:text-white dark:hover:bg-gray-800 text-gray-900 hover:bg-gray-100">{{ $item['name'] }}</a>
                        @endforeach
                    </div>
                    {{-- <div class="py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 dark:text-white dark:hover:bg-gray-800 text-gray-900 hover:bg-gray-100">Log
                            in</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>
