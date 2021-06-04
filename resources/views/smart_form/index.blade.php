@extends('layouts.master')

@section('title', 'Smart форма')

@prepend('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/smart_form.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/coupon.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
@endprepend

@section('content')
    <div class="smart_form_header_scope">
        <div class="smart_form_logo"><img src="{{ asset('img/smart_form/smart_form_logo.svg') }}" alt="Smart form logo"/></div>
        <div class="button_edit_smart_form">

            @auth
                <a href="{{ route('smart-form-edit') }}"><button><p>Настроить форму</p></button></a>
            @endauth

            @guest
                <a href="{{ route('login') }}"><button><p>Настроить форму</p></button></a>
            @endguest

        </div>
    </div>
    <div class="line">
        <hr>
    </div>
    <div class="coupons_scope">
        @foreach ($coupons as $coupon)
            <div class="item_coupon">
                <div class="item_coupon_logo"><img src="{{ $coupon->image }}" alt="Image company"/></div>
                <div class="item_coupon_name"><p>{{ $coupon->name }}</p></div>

                @auth
                    <div class="item_coupon_link"><a href="{{ $coupon->link }}"><img src="{{ asset('img/coupons/link.svg') }}" alt="Link logo"/></a></div>
                @endauth

                @guest
                    <div class="item_coupon_link"><a href="{{ route('login') }}"><img src="{{ asset('img/coupons/link.svg') }}" alt="Link logo"/></a></div>
                @endguest

            </div>
        @endforeach

        @if (empty($coupons) && !$unused)
            <div class="coupons_empty"><h2>Ничего не найдено по вашему запросу :(</h2></div>
        @endif

        @if ($unused)
            <div class="coupons_empty"><h2>Необходимо настроить форму!</h2></div>
        @endif
    </div>

@endsection
