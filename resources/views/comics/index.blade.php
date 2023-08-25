@extends('layouts.main')

@section('title', 'Comics')

@section('main')
<section id="current-series">
    <div class="container mt-4">
        <div class="row row-cols-4">
            @foreach($comics as $comic)
            <div class="col">
        {{-- cards --}}
        <div class="card mb-4" style="width: 18rem;">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
            <div class="card-body">
              <h5 class="card-title">{{ $comic['title'] }}</h5>
              <p class="card-text">{{ $comic['description'] }}</p>
              <a href="{{url("/comics.{comic}")}}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>
        
        <div class="button">LOAD MORE</div>
    </div>
</section>

@endsection