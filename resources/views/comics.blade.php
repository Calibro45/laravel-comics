@extends('layout.standard')

@section('mainContent')

<!-- comic section -->

<section id="comics">
    <div class="container">

        <button class="current-cta">Current Series</button>

        <!-- comics card -->
        @include('partials.comicsCard')
                
        <div class="comics-cta">
            <button>load more</button>
        </div>

    </div>
</section>

<!-- banner section -->

@include('partials.banner')

@endsection