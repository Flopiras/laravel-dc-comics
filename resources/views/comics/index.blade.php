@extends('layouts.main')

@section('title', 'Comics')

@section('main')
<section id="current-series">
    <div class="container cards-container">
        @foreach($comics as $comic)
        {{-- cards --}}
        <div class="card">
            <a href="{{route('comics.detail', $loop->index)}}">
                <figure>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <figcaption>{{ $comic['title'] }}</figcaption>
                </figure>
            </a>
        </div>
        @endforeach
        <div class="button">LOAD MORE</div>
    </div>
</section>

@endsection