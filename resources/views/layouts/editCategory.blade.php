@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <form action="/category/{{ $category->id }}" method='POST'>
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Kategori</label>
            <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ $category->name }}" maxlength="255">
            <div class="form-text">Nama Kategori tidak boleh lebih dari 255 karakter</div>
            @error('category_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-2">Save</button> <br>
        <a href="{{ url('category') }}">
            <button class="btn btn-danger mt-2" type="button">Back</button>
        </a>
    </form>
@endsection
