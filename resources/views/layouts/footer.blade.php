@php
    $links = [
        [
            'text' => 'Home',
            'link' => route('home'),
        ],
        [
            'text' => 'About',
            'link' => route('about'),
        ],
        [
            'text' => 'Contact',
            'link' => route('contact'),
        ],
    ];
@endphp

<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 lg:px-8">
        <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
            @foreach ($links as $item)
                <div class="pb-6">
                    <a href="{{ $item['link'] }}"
                        class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">{{ $item['text'] }}</a>
                </div>
            @endforeach
        </nav>
        <div class="text-center mt-8">
            <dark-mode-toggle></dark-mode-toggle>
        </div>
        <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; {{ date('Y') }}
            {{ config('app.seo_name') }}, Inc. All rights reserved.
        </p>
    </div>
</footer>
