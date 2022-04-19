@php
    $shopList = [
        [
            'image' => 'img/buy-comics-digital-comics.png',
            'ancora' => '#',
            'title' => 'digital comics'
        ],
        [
            'image' => 'img/buy-comics-merchandise.png',
            'ancora' => '#',
            'title' => 'dc merchandise'
        ],
        [
            'image' => 'img/buy-comics-subscriptions.png',
            'ancora' => '#',
            'title' => 'subscription'
        ],
        [
            'image' => 'img/buy-comics-shop-locator.png',
            'ancora' => '#',
            'title' => 'comic shop locator'
        ],
        [
            'image' => 'img/buy-dc-power-visa.svg',
            'ancora' => '#',
            'title' => 'dc power visa'
        ],
    ];
@endphp

<section id="banner">
    <div class="container">

        <ol class="shop-wrap">

            @foreach($shopList as $el)
            <li class="shop-item">
                <figure class="shop-item-logo">
                    <img src="{{ asset($el['image']) }}" alt="{{ $el['title'] }}">
                </figure>

                <div class="shop-item-title">
                    <a href="{{ $el['ancora'] }}">
                        <h4>{{ $el['title'] }}</h4>
                    </a>
                </div>
            </li>
            @endforeach

        </ol>

    </div>
</section>