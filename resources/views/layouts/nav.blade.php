@php
    $links = [
        [
            'text' => 'Home',
            'title' => 'Florida EBike Experiences',
            'link' => route('home'),
        ],
        [
            'text' => 'Trails',
            'title' => 'Florida EBike Trails',
            'link' => route('trails.index'),
        ],
    ];
@endphp

<div>
    <nav-bar :links="{{ json_encode($links) }}" />
</div>
