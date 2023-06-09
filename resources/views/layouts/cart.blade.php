@extends('layouts.app')

@section('title', 'cart')

@section('content')

    <main class="container mt-3">
        <div class="row">
            <div class="col-md-7">
                <h1>Product</h1>
                <hr>
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
                <hr>
                <table class="table table-bordered" style="width: 40vw">
                    <thead class="table table-primary" style="text-align: center">
                        <tr>
                            <th scope="col" style="min-width: 8px; max-width: 15px">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col" style="min-width: 120px; max-width: 200px">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <th scope="row" style="text-align: center">
                                    {{ $loop->iteration }}.
                                </th>
                                <td style="padding-left: 20px">{{ $item->name }}</td>
                                <td style="text-align: center">Rp{{ $item->price }}</td>
                            </tr>
                        @endforeach
                        <tr style="text-align:center">
                            <th  colspan="2">
                                Total Harga :
                            </th>
                            <th>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($products as $item)
                                    @php
                                        $total += $item->price;
                                    @endphp
                                @endforeach
                                Rp{{ $total }}
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


@endsection
