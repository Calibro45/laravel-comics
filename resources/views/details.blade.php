@extends('layout.standard')

@section('mainContent')

    <section id="banner-comic">
        <div class="container-md">
            
            {{-- card comics details --}}

            <div class="comic-wrap">
                <figure>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </figure>
                <p class="comic book">comic book</p>
                <p class="comic gallery">view gallery</p>
            </div>

        </div>
    </section>

    <section id="comic-description">
        <div class="container-md">

            <div class="comic-desc-wrap">
                <h2 class="comic-title">{{ $comic['title'] }}</h2>

                <div class="price-wrap">
                    <div class="price">
                        <h4>U.S. Price: <span>{{ $comic['price'] }}</span></h4>
                        <h4 class="uppercase">available</h4>
                    </div>
                    <div class="available">
                        <h4>Chek Availability</h4>
                    </div>
                </div>

                <p class="comic-description">{{ $comic['description'] }}</p>
            </div>

            <figure class="adversiment">
                <img src="{{ asset('img/adv.jpg') }}" alt="adversiment">
            </figure>

        </div>
    </section>

@endsection