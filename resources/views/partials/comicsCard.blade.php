<!-- start card comic -->
@foreach($comics as $comic)
    <div class="comics-card-wrap">
        <figure class="card-header">
            <img src="{{ $comic['thumb'] }}" alt="">
        </figure>
        <div class="card-body">
            <h4>{{ $comic['series'] }}</h4>
        </div>
    </div>
@endforeach
<!-- end card comic -->