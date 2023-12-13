<!-- resources/views/child.blade.php -->

@extends('ViewTemplate')

@section('title')
    <script src="{{asset('js/basketScript.js')}}"></script>
@endsection


@section('header')
    <h1>Basket</h1>
@endsection


@section('main')
    <div>
        <h1>Reserve your products here!</h1>
        <button id="updateBasketButton" onclick="updateBasket()">
            Retrive Basket
        </button>
        <br>
        <div id="basket-main">

            {{--            <h3>Your order</h3>--}}
            {{--            <p>Roast: 0</p>--}}
            {{--            <p>Steaks: 0</p>--}}
            {{--            <p>Beef Sausage: 0</p>--}}
            {{--            <p>Minced Beef: 0</p>--}}
            {{--            <p>Potatoes: 0</p>--}}
            {{--            <p>Beef Salami: 0</p>--}}


        </div>
        <br>
        <button id="confirmButton" onclick="finalizePurchase()">
            Confirm Reservation
        </button>
    </div>

@endsection
