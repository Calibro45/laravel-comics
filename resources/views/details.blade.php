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

    {{-- comic description --}}

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
                <h4 class="uppercase">advertisement</h4>
                <img src="{{ asset('img/adv.jpg') }}" alt="adversiment">
            </figure>

        </div>
    </section>

    {{-- comic info --}}

    <section id="comic-info">
        <div class="container-md">

            <div class="col-6 col-12">
                <h4 class="info-title">Talent</h4>
                <ol>
                    <li class="info-item">
                        <p class="info-desc-title">Art by: </p>
                        <p class="info-desc">
                            @foreach($comic['artists'] as $artist)
                                {{ $artist.', ' }} 
                            @endforeach
                        </p>
                    </li>
                    <li class="info-item">
                        <p class="info-desc-title">Written by: </p>
                        <p class="info-desc">
                            @foreach($comic['writers'] as $writer)
                                {{ $writer.', ' }}
                            @endforeach
                        </p>
                    </li>
                </ol>
            </div>

            <div class="col-6 col-12">
                <h4 class="info-title">Specs</h4>
                <ol>
                    <li class="info-item">
                        <p class="info-desc-title">Series: </p>
                        <p class="info-desc uppercase">{{ $comic['series'] }}</p>
                    </li>
                    <li class="info-item">
                        <p class="info-desc-title">U.S. Price: </p>
                        <p class="info-desc">{{ $comic['price'] }}</p>
                    </li>
                    <li class="info-item">
                        <p class="info-desc-title">On Sale Date</p>
                        <p class="info-desc">{{ $comic['sale_date'] }}</p>
                    </li>
                </ol>
            </div>

        </div>
    </section>
@endsection