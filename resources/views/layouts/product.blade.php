@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <h1>Product</h1>
    <hr>
    <a href="{{ url('product/addProduct') }}">
        <button class="btn btn-primary mb-4" type="button">+ Add Product</button>
    </a>
    @foreach ($products as $item)
        <div class="card mb-3">
            <div class="card-body">
                <div class="card-title">
                    <h3>{{ $item->name }} ( Rp{{ $item->price }} )</h3>
                </div>
                <div class="card-subtitle">
                    Category: {{ $item->category->name }} <br>
                    Stock: {{ $item->stock }}
                </div>
                <div class="card-text">
                    {{ $item->description }}
                </div>
                <a href="product/{{ $item->id }}/edit">
                    <button class="btn btn-warning mt-2" type="button">Edit</button>
                </a>
                <a href="product/{{ $item->id }}/delete">
                    <button class="btn btn-danger mt-2" type="button">Delete</button>
                </a>
            </div>
        </div>
    @endforeach
@endsection
