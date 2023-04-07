@extends('layouts.app')

@section('title', 'cart')

@section('content')

    <main class="container mt-3">
        <div class="row">
            <div class="col-md-7">
                <h1>Product</h1>
                @foreach ($products as $item)
                    <div class="card mb-3" style="min-width:20vw; max-width:50vw">
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
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
                <h1>Cart</h1>
                <table class="table table-bordered" style="width: 40vw">
                    <thead class="table table-primary" style="text-align: center">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">dsaidasisad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>Total Harga: @foreach ($products as $item)
                                    {{ $item->price }} +
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


@endsection
