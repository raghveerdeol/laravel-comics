@extends('layouts.app')

@section('main-section')
<section id="comics">
    <div class="card-list">
        @foreach ($comicsList as $comic )
        <article class="card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['type']}}">
            <h5>
                {{ $comic['series'] }}
            </h5>
        </article>
        @endforeach
    </div>
    <div class="more-comics">
        <button>load more</button>
    </div>
</section>
@endsection
