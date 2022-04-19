@php 
    $links = [
        [
            'href' => '#',
            'text' => 'characters',
        ],
        [
            'href' => '#',
            'text' => 'comics',
        ],
        [
            'href' => '#',
            'text' => 'movies',
        ],
        [
            'href' => '#',
            'text' => 'tv',
        ],
        [
            'href' => '#',
            'text' => 'games',
        ],
        [
            'href' => '#',
            'text' => 'collectibles',
        ],
        [
            'href' => '#',
            'text' => 'videos',
        ],
        [
            'href' => '#',
            'text' => 'fans',
        ],
        [
            'href' => '#',
            'text' => 'news',
        ],
        [
            'href' => '#',
            'text' => 'shop',
        ],
    ]
@endphp

<header class="main-header">
    <div class="container">

        <figure class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </figure>

        <nav class="main-nav">
            <ol>
                @foreach ($links as $link)
                    <li>
                        <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ol>
        </nav>

    </div>
</header>

