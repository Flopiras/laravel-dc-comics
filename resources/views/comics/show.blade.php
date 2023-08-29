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
        
        {{-- buttons --}}
        <div class="buttons d-flex">
            {{-- back --}}
            <a href="{{route('comics.index')}}" class="btn btn-primary mt-4">Back</a>

            {{-- edit --}}
            <a href="{{route('comics.edit', $comic )}}" class="btn btn-warning mx-3 mt-4 text-end">Edit Comic</a>

            {{-- delete --}}
            <form method="POST" action="{{route('comics.destroy', $comic)}}" class="mt-4">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete Comic</button>
            </div>
        </form>
    </div>
</section>

@endsection