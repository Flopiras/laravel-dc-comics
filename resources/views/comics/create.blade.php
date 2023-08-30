@extends('layouts.main')

@section('title', "Create")

@section('main')
<div class="container mt-4">
    {{-- form --}}
    <form method="POST" action="{{ route('comics.store')}}" novalidate>
        {{-- token --}}
        @csrf

        <div class="row">
            
            {{-- title --}}
            <div class="col-3">
                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title', '') }}" required>
                </div>
            </div>

            {{-- price --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="price" class="form-label fw-bold">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Price" value="{{ old('price', '') }}" required>
                </div>
            </div>

            {{-- series --}}
            <div class="col-3">
                <div class="mb-3">
                    <label for="series" class="form-label fw-bold">Series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Series" value="{{ old('series', '') }}" required>
                </div>
            </div>
        
            {{-- sale date --}}
            <div class="col-3">
                <div class="mb-3">
                    <label for="sale_date" class="form-label fw-bold">Sale date</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Sale date" value="{{ old('sale_date', '') }}" min="1800-01-01" max="2023-12-31" required>
                </div>
            </div>

            {{-- type --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="type" class="form-label fw-bold">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Type" value="{{ old('type', '') }}" required>
                </div>
            </div>
        
            {{-- thumb --}}
            <div class="col-7">
                <div class="mb-3">
                    <label for="thumb" class="form-label fw-bold">Image</label>
                    <input thumb="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Type" value="{{ old('thumb', '') }}" >
                </div>
            </div>
            <div class="col-2">
                <img src="{{ old('thumb', $comic->thumb ?? 'https://marcolanci.it/utils/placeholder.jpg') }}" class="img-fluid" id="image-preview" alt="preview">
            </div>

            {{-- artists --}}
            <div class="col-12">
                <div class="mb-3">
                    <label for="artists" class="form-label fw-bold"> Artists </label>
                    <textarea class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" rows="3">{{ old('srtists', '') }}</textarea>
                </div>
            </div>

            {{-- writers --}}
            <div class="col-12">
                <div class="mb-3">
                    <label for="writers" class="form-label fw-bold"> Writers </label>
                    <textarea class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" rows="3">{{ old('writers', '') }}</textarea>
                </div>
            </div>

            {{-- description --}}
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold"> Description </label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6">{{ old('description', '') }}</textarea>
                </div>
            </div>
        </div>

        {{-- buttons --}}
        <button type="submit" class="btn btn-success">Save</button>

        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
    
</div>
@endsection

@section('scripts')
    @vite('resources/js/image-preview.js')

@endsection