@php
    $comicLink = [
        [
            'link' => 'character',
            'ancora' => '#',
        ],
        [
            'link' => 'comics',
            'ancora' => '#',
        ],
        [
            'link' => 'movies',
            'ancora' => '#',
        ],
        [
            'link' => 'tv',
            'ancora' => '#',
        ],
        [
            'link' => 'games',
            'ancora' => '#',
        ],
        [
            'link' => 'videos',
            'ancora' => '#',
        ],
        [
            'link' => 'news',
            'ancora' => '#',
        ],
    ];

    $shopLink = [
        [
            'link' => 'shop DC',
            'ancora' => '#',
        ],
        [
            'link' => 'shop DC collectibles',
            'ancora' => '#',
        ],
    ];

    $dcLink = [
        [
            'link' => 'Term Of Use',
            'ancora' => '#',
        ],
        [
            'link' => 'Privacy policy (New)',
            'ancora' => '#',
        ],
        [
            'link' => 'Ad Choises',
            'ancora' => '#',
        ],
        [
            'link' => 'Adversiting',
            'ancora' => '#',
        ],
        [
            'link' => 'Jobs',
            'ancora' => '#',
        ],
        [
            'link' => 'Subscriptions',
            'ancora' => '#',
        ],
        [
            'link' => 'Talent Workshops',
            'ancora' => '#',
        ],
        [
            'link' => 'CPSC Certificates',
            'ancora' => '#',
        ],
        [
            'link' => 'Ratings',
            'ancora' => '#',
        ],
        [
            'link' => 'Shop Help',
            'ancora' => '#',
        ],
        [
            'link' => 'Contact Us',
            'ancora' => '#',
        ],
    ];

    $siteLinks = [
        [
            'link' => 'DC',
            'ancora' => '#',
        ],
        [
            'link' => 'MAD Magazine',
            'ancora' => '#',
        ],
        [
            'link' => 'DC Kids',
            'ancora' => '#',
        ],
        [
            'link' => 'DC Universe',
            'ancora' => '#',
        ],
        [
            'link' => 'DC Power Visa',
            'ancora' => '#',
        ]
    ];

    $socialLink = [
        [
            'image' => 'footer-facebook.png',
            'ancora' => '#'
        ],
        [
            'image' => 'footer-twitter.png',
            'ancora' => '#'
        ],
        [
            'image' => 'footer-youtube.png',
            'ancora' => '#'
        ],
        [
            'image' => 'footer-pinterest.png',
            'ancora' => '#'
        ],
        [
            'image' => 'footer-periscope.png',
            'ancora' => '#'
        ],
    ]

@endphp

<footer>
    <section id="contatti">
        <div class="container">

            <!-- prima lista -->

            <div class="contact-wrap">
                <h3 class="contact-title">dc comics</h3>
                <ol class="contact-list">

                    @foreach($comicLink as $link)
                    <li class="contact-link">
                        <a href="{{ $link['ancora'] }}">{{ $link['link'] }}</a>
                    </li>
                    @endforeach

                </ol>

                <h3 class="contact-title">shop</h3>
                <ol class="contact-list">

                    @foreach($shopLink as $link)
                    <li class="contact-link">
                        <a href="{{ $link['ancora'] }}">{{ $link['link'] }}</a>
                    </li>
                    @endforeach                

                </ol>
            </div>

            <!-- seconda lista -->

            <div class="contact-wrap">
                <h3 class="contact-title">dc</h3>
                <ol class="contact-list">

                    @foreach($dcLink as $link)
                    <li class="contact-link">
                        <a href="{{ $link['ancora'] }}">{{ $link['link'] }}</a>
                    </li>
                    @endforeach

                </ol>
            </div>

            <!-- terza lista -->

            <div class="contact-wrap">
                <h3 class="contact-title">sites</h3>
                <ol class="contact-list">

                    @foreach($siteLinks as $link)
                    <li class="contact-link">
                        <a href="{{ $link['ancora'] }}">{{ $link['link'] }}</a>
                    </li>
                    @endforeach

                </ol>
            </div>

        </div>
    </section>

    <section id="info">
        <div class="container">

            <div class="login">
                <button class="sign-in">sign-up now!</button>
            </div>
            <div class="social-item">
                <h3>Follow Us</h3>
            </div>

            <ol class="social">
                <li class="social-item">
                    <a href="#">
                        <img src="" alt="">
                    </a>
                </li>
            </ol>

        </div>
    </section>
</footer>