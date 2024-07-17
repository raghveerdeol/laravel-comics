@extends('layouts.app')
@section('title', 'comics')


@section('main-section')
<div class="jumbotron">
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="teen titans">
    <span>current series</span>
</div>
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
