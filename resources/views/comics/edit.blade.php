@extends('layouts.main')

@section('title', "Edit $comic->title")

@section('main')
{{-- form --}}
<div class="container mt-4">
    <div class="row">

        {{-- title --}}
        <div class="col-3">
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $comic->title }}" required>
            </div>
        </div>

        {{-- price --}}
        <div class="col-2">
            <div class="mb-3">
                <label for="price" class="form-label fw-bold">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{ $comic->price }}" required>
            </div>
        </div>

        {{-- series --}}
        <div class="col-3">
            <div class="mb-3">
                <label for="series" class="form-label fw-bold">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Series" value="{{ $comic->series }}" required>
            </div>
        </div>

        {{-- sale date --}}
        <div class="col-3">
            <div class="mb-3">
                <label for="sale_date" class="form-label fw-bold">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Sale date" value="{{ $comic->sale_date }}" min="1800-01-01" max="2023-12-31" required>
            </div>
        </div>

        {{-- type --}}
        <div class="col-2">
            <div class="mb-3">
                <label for="type" class="form-label fw-bold">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Type" value="{{ $comic->type }}" required>
            </div>
        </div>

        {{-- thumb --}}
        <div class="col-7">
            <div class="mb-3">
                <label for="thumb" class="form-label fw-bold">Image</label>
                <input thumb="url" class="form-control" id="thumb" name="thumb" placeholder="Type" value="{{ $comic->thumb }}" >
            </div>
        </div>
        <div class="col-2">
            <img src="{{ $comic->thumb ?? 'https://marcolanci.it/utils/placeholder.jpg' }}" class="img-fluid" id="image-preview" alt="preview">
        </div>

        {{-- description --}}
        <div class="col-12">
            <div class="mb-3">
                <label for="description" class="form-label fw-bold"> Description </label>
                <textarea class="form-control" id="description" name="description" rows="6">{{ $comic->description }}</textarea>
            </div>
        </div>

    </div>
    
</div>
@endsection

@section('scripts')
    @vite('resources/js/image-preview.js')

@endsection