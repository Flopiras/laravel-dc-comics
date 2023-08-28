@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <div class="container">
        <h3 class="text-center fw-bold my-4">Our Last Comic :</h3>

        {{-- card --}}
        <div class="card" >
            <div class="d-flex">

                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endsection