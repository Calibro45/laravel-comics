<!-- start card comic -->
@foreach($comics as $index => $comic)
    <a href="{{ route('comics.show', ['id' => $index]) }}" class="comics-card-wrap">
        <figure class="card-header">
            <img src="{{ $comic['thumb'] }}" alt="">
        </figure>
        <div class="card-body">
            <h4>{{ $comic['series'] }}</h4>
        </div>
    </a>
@endforeach
<!-- end card comic -->