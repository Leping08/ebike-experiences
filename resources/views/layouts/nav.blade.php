@php
    $links = [
        [
            'text' => 'Home',
            'link' => route('home'),
        ],
        // [
        //     'text' => 'About',
        //     'link' => route('about'),
        // ],
        [
            'text' => 'Trails',
            'link' => route('trails.index'),
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
