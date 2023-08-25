@extends('layouts.main')

@section('title', $comic->title)

@section('main')
<section>
    <div class="container ">
        <div class="card mt-4">

            <div class="card-header text-center mb-3">
                <h1>{{ $comic->title }}</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}"  alt="{{ $comic['title'] }}">
                    </div>
                    <div class="col-9">
                        <p class="card-text">{{ $comic['description'] }}</p>
                        {{-- artists --}}
                        <div class="d-flex justify-content-center ">
                            <h5 class="me-2">Artists:</h5>
                            <p> {{ $comic['artists'] }}</p>
                        </div>
                        {{-- writers --}}
                        <div class="d-flex justify-content-center ">
                            <h5 class="me-2">Writers:</h5>
                            <p> {{ $comic['writers'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <a href="{{route('comics.index')}}" class="btn btn-primary mt-4">Back</a>
    </div>
</section>

@endsection