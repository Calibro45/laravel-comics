@php 
    $links = [
        [
            'href' => '#',
            'text' => 'home',
            'name' => 'home',
        ],
        [
            'href' => '#',
            'text' => 'characters',
            'name' => '',
        ],
        [
            'href' => '/comics',
            'text' => 'comics',
            'name' => 'comics.index',
        ],
        [
            'href' => '#',
            'text' => 'movies',
            'name' => '',
        ],
        [
            'href' => '#',
            'text' => 'tv',
            'name' => '',
        ],
        [
            'href' => '#',
            'text' => 'games',
            'name' => '',
        ],
        [
            'href' => '#',
            'text' => 'collectibles',
            'name' => '',
        ],
        [
            'href' => '#',
            'text' => 'videos',
            'name' => '',
        ],
        [
            'href' => '#',
            'text' => 'fans',
            'name' => '',
        ],
        [
            'href' => '#',
            'text' => 'news',
            'name' => '',
        ],
        [
            'href' => '#',
            'text' => 'shop',
            'name' => '',
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
                    <li class="nav-link 
                    {{ Request::route()->getName() == $link['name'] ? 'active' : '' }}">
                        <a href="{{ $link['name'] != '' ? route($link['name']) : $link['href'] }}">
                            {{ $link['text'] }}
                        </a>
                    </li>
                @endforeach
            </ol>
        </nav>

    </div>
</header>

