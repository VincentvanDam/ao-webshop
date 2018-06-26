@extends('layouts.app')

@section('content')
    @if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif
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