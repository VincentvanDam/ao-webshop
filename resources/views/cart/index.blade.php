@extends('layouts.app')

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset3">
                <ul class="list-group">
                    @foreach ($products as $prod)
                        <li class="list-group-item">
                            <span class="badge">{{  $prod['qty'] }}</span>
                            <strong>{{ $prod['item']['title'] }}</strong>
                            <span class="label label-success">{{ $prod['price'] }}</span>
                            <div class="btn-group">
                                <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span> </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" >Reduce by 1</a></li>
                                    <li><a href="#" >Reduce all</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset3">
                <button type="button" class="btn btn-success">Checkout</button>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset3">
                <h2>No items in cart!</h2>
            </div>
        </div>
    @endif
@endsection