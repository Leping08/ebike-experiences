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

<div>
    <nav-bar :links="{{ json_encode($links) }}" />
</div>
