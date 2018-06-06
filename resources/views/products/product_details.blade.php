@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product details</div>
                    <div class="card-body">
                        <div>
                            <h2>{{ $products->name }}</h2>
                        </div>
                        <ul>
                            <li>{{ $products->speed }}</li>
                            <li>€{{ $products->price }}</li>
                        </ul>
                        <a class="btn btn-dark" href="{{ action('CartController@getProduct', $products->id) }}">Add to cart</a>
                        <a class="btn btn-dark" href="{{ action('CartController@getShoppingCart') }}">To Cart</a>


                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection