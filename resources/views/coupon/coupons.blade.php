@extends('layouts.master')

@section('title', 'Купоны')

@prepend('css')
    <link rel="stylesheet" type="text/css" href="css/coupons.css"/>
    <link rel="stylesheet" type="text/css" href="css/app.css"/>
@endprepend

@section('content')
    <div class="search_coupons_scope">
        <form method="POST" action="{{ route('coupons') }}">
            @csrf
            <div class="search_input"><input type="text" placeholder="Введите название" name="search" required /></div>
            <div class="search_confirm"><button type="submit"><img src="img/coupons/search.svg" alt="Search"/></button></div>
        </form>
    </div>
    <div class="coupons_scope">
        @foreach ($coupons as $coupon)
            <div class="item_coupon">
                <div class="item_coupon_logo"><img src="{{ $coupon->image }}" alt="Image company"/></div>
                <div class="item_coupon_name"><p>{{ $coupon->name }}</p></div>
                <div class="item_coupon_link"><a href="{{ $coupon->link }}"><img src="img/coupons/link.svg" alt="Link logo"/></a></div>
            </div>
        @endforeach
    </div>

    {{ $coupons->links() }}

@endsection
