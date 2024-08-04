<div>
    @php
    $slides = [
        [
            'image' => 'https://placehold.co/600x400',
            'title' => 'Front end developers',
            'description' => 'We love last week frameworks.',
            'url' => '#',
            'urlText' => 'Get started',
        ],
        [
            'image' => 'https://placehold.co/600x400',
            'title' => 'Full stack developers',
            'description' => 'Where burnout is just a fancy term for Tuesday.',
        ],
        [
            'image' => 'https://placehold.co/600x400',
            'url' => '#',
            'urlText' => 'Let`s go!',
        ],
        [
            'image' => 'https://placehold.co/600x400',
            'url' => '#',
        ],
    ];
    @endphp

<x-carousel :slides="$slides" />
</div>
