@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
    <form action="{{ url('product') }}" method='POST'>
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" maxlength="255">
            <div class="form-text">Nama Produk tidak boleh lebih dari 255 karakter</div>
            @error('product_name')
                <div class="invalid-feedback">
                    Nama Produk tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control @error('product_stock') is-invalid @enderror" name="product_stock">
            @error('product_stock')
                <div class="invalid-feedback">
                    Stock tidak boleh kosong & harus berupa angka
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error('product_description') is-invalid @enderror" name="product_description">
            @error('product_description')
                <div class="invalid-feedback">
                    Deskripsi tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control @error('product_price') is-invalid @enderror" name="product_price">
            @error('product_price')
                <div class="invalid-feedback">
                    Harga tidak boleh kosong & harus berupa angka
                </div>
            @enderror
        </div>
        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->name }}</option>
            @endforeach
            @error('category_id')
                <div class="invalid-feedback">
                    Pilih Kategori
                </div>
            @enderror
        </select>
        <button type="submit" class="btn btn-primary mt-2">Add</button> <br>
        <a href="{{ url('product') }}">
            <button class="btn btn-danger mt-2" type="button">Back</button>
        </a>
    </form>
@endsection
