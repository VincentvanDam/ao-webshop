@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Category articles</div>
                    <div class="card-body">
                        <div>
                            <h2>{{ $categories->name }}</h2>
                        </div>
                        <ul>
                            <ul>
                                @foreach($categories->products as $product)
                                    <li><a href="{{ action('ProductController@display', $product->id) }}">{{ $product->name }}</a></li>
                                @endforeach
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection