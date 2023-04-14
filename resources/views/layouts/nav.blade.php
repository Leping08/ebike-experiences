@php
    $links = [
        [
            'text' => 'Home',
            'link' => route('home'),
        ],
        [
            'text' => 'Trails',
            'link' => route('trails.index'),
        ],
    ];
@endphp

<div>
    <nav-bar :links="{{ json_encode($links) }}" />
</div>
