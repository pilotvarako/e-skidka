@extends('layouts.master')

@prepend('meta')
    <meta name="verify-admitad" content="8a9af13fc2" />
@endprepend

@prepend('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/coupon.css') }}"/>
@endprepend

@section('title', 'E-skidka')

@section('content')
    <div class="banner">
        <div class="title_banner"><h1>Простой инструмент для экономии денежных средств</h1></div>
        <div class="banner_logo"><img src="{{ asset('img/main/banner_main_logo.svg') }}" alt="Main banner"/></div>
        <div class="item_registry"><img src="{{ asset('img/main/banner_registry.svg') }}" alt="Logo registry"/><p>Регистрируйтесь</p></div>
        <div class="item_pointer_first"><img src="{{ asset('img/main/banner_icon_right.svg') }}" alt="Icon right"/></div>
        <div class="item_coupon"><img src="{{ asset('img/main/banner_click_logo.svg') }}" alt="Icon click"/><p>Выбирайте купон</p></div>
        <div class="item_pointer_second"><img src="{{ asset('img/main/banner_icon_right.svg') }}" alt="Icon right"/></div>
        <div class="item_link"><img src="{{ asset('img/main/banner_link_coupon.svg') }}" alt="Icon link"/><p>Переходите на сайт магазина по купону</p></div>
    </div>
    <div class="items_shop">
        <div class="coupons_scope">
            @forelse ($coupons as $coupon)
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
            @empty
                <div class="coupons_empty"><h2>Пусто :(</h2></div>
            @endforelse
        </div>
        <div class="button_all_coupons">
            <a href="{{ route('coupons') }}"><button><img src="{{ asset('img/main/all_coupons_logo.svg') }}" alt="All coupons"/><p>Все купоны</p></button></a>
        </div>
    </div>
    <div class="additional_tools">
        <h3>Дополнительные инструменты</h3>
        <div class="items_tool">
            <div class="item_smart_form">
                <a href="{{ route('smart-form') }}"><img src="{{ asset('img/main/smart_form_tool_logo.svg') }}" alt="Smart form"/></a>
                <p>Специальная форма для подбора оптимальных купонов по вашим предпочтениям и интересам</p>
            </div>
            <div class="transition_tools"><img src="{{ asset('img/main/transition_tools_logo.svg') }}" alt="Tools"/></div>
            <div class="item_mnogo_skidok">
                <a href="http://mnogo-skidok.ru/"><img src="{{ asset('img/main/mnogo_skidok_tool_logo.svg') }}" alt="Mnogo skidok"/></a>
                <p>Инструмент для экономии денежных средств на услугах в оффлайн режиме</p>
            </div>
        </div>
    </div>
    <div class="action_service">
        <h3>Начинай экономить прямо сейчас, без потери качества товаров и услуг</h3>
        <div class="action_buttons">
            <div class="button_action_registry">
                <a href="{{ route('register') }}"><button><img src="{{ asset('img/main/action_registry_logo.svg') }}" alt="Registry"/><p>Зарегистрироваться</p></button></a>
            </div>
            <div class="button_action_entry">
                <a href="{{ route('login') }}"><button><img src="{{ asset('img/main/action_entry_logo.svg') }}" alt="Entry"/><p>Войти</p></button></a>
            </div>
        </div>
    </div>
@endsection
