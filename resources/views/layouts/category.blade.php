@extends('layouts.app')

@section('title', 'Category')

@section('content')
    <h1>Category</h1>
    <hr>
    <a href="{{ url('category/addCategory') }}">
        <button class="btn btn-primary mb-4" type="button">+ Add Category</button>
    </a>
    @foreach ($categories as $item)
        <div class="card mb-3">
            <div class="card-body">
                <div class="card-title">
                    <h3>Category: {{ $item->name }}</h3>
                </div>
                <a href="category/{{ $item->id }}/edit">
                    <button class="btn btn-warning mt-2" type="button">Edit</button>
                </a>
                <a href="category/{{ $item->id }}/delete">
                    <button class="btn btn-danger mt-2" type="button">Delete</button>
                </a>
            </div>
        </div>
    @endforeach
@endsection
