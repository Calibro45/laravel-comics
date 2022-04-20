@extends('layout.standard')

@section('mainContent')

    <section id="banner-comic">
        <div class="container-md">

            <div class="comic-wrap">
                <figure>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </figure>
                <p class="comic book">comic book</p>
                <p class="comic gallery">view gallery</p>
            </div>

        </div>
    </section>

@endsection