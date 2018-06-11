@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Overzicht producten</div>
                    <div class="card-body">
                        <ul>

                            @foreach ($products as $prod)
                                <li><a href="{{ action('ProductController@display', $prod->id) }}">{{ $prod->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection