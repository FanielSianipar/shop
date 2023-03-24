@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <form action="/product/{{ $product->id }}" method="POST">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name"
                value="{{ $product->name }}" maxlength="255">
            <div class="form-text">Nama produk tidak boleh lebih dari 255 karakter</div>
            @error('product_name')
                <div class="invalid-feedback">
                    Nama tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control @error('product_stock') is-invalid @enderror" name="product_stock"
                value="{{ $product->stock }}">
            @error('product_stock')
                <div class="invalid-feedback">
                    Stock tidak boleh kosong & harus berupa angka
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error('product_description') is-invalid @enderror"
                name="product_description" value="{{ $product->description }}">
            @error('product_description')
                <div class="invalid-feedback">
                    Deskripsi tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control @error('product_price') is-invalid @enderror" name="product_price"
                value="{{ $product->price }}">
            @error('product_price')
                <div class="invalid-feedback">
                    Harga tidak boleh kosong & harus berupa angka
                </div>
            @enderror
        </div>
        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">
                Pilih salah satu Kategori
            </div>
        @enderror
        <button type="submit" class="btn btn-primary mt-2">Save</button> <br>
        <a href="{{ url('product') }}">
            <button class="btn btn-danger mt-2" type="button">Cancel</button>
        </a>
    </form>
@endsection
