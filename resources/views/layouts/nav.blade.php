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
            'text' => 'Legacy Trail',
            'link' => route('trails.legacy-trail'),
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
