@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="../{{ $product['gallery'] }}" alt="" class="detail-img">
            </div>
            <div class="col-sm-6">
                <a href="/" class="btn btn-primary">Go back</a>
                <h2>{{ $product['name'] }}</h2>
                <h4>{{ $product['price'] }} Ft</h4>
                <h6>{{ $product['description'] }}</h6>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="text name="product_id" value="{{ $product['id'] }}" />
                    <button class="btn btn-success">Kosárba</button>
                </form>
            </div>
        </div>
    </div>
@endsection
