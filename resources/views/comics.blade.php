@extends('layout.standard')

@section('mainContent')

<section id="comics">
    <div class="container">

        <!-- comics card -->
        @include('partials.comicsCard')
                
        <div class="comics-cta">
            <button>load more</button>
        </div>

    </div>
</section>

@endsection