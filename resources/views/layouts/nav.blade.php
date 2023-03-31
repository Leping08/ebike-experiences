<nav class="bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-white font-bold text-xl">{{ config('app.seo_name') }}</a>
                </div>
                <!-- Links -->
                <div class="hidden md:block">
                    <ul class="ml-10 flex items-baseline space-x-4">
                        <li>
                            <a href="{{ route('home') }}"
                                class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Hamburger menu -->
            <div class="-mr-2 flex md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out"
                    aria-label="Main menu" aria-expanded="false">
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu, toggle classNamees based on menu state. -->
    <div class="md:hidden">
        <div class="px-2 pt-2 pb-3 sm:px-3">
            <a href="{{ route('home') }}"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="{{ route('about') }}"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
            <a href="{{ route('contact') }}"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>
    </div>
</nav>
