@extends('layouts.main')

@section('title', 'Comics')

@section('main')
<section id="current-series">
    <div class="container mt-4">
      <a href="{{route('comics.create')}}" class="btn btn-success mb-3">Create new comic</a>

        <div class="row row-cols-4">
            @foreach($comics as $comic)
            <div class="col">
        {{-- cards --}}
        <div class="card mb-4" style="width: 18rem;">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
            <div class="card-body">
              <h5 class="card-title">{{ $comic['title'] }}</h5>
              <p class="card-text">{{ substr(($comic['description']), 0, 100)}}...</p>
              <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>
        
        <div class="button">LOAD MORE</div>
    </div>
</section>

@endsection