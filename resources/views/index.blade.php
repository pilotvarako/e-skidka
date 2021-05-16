@extends('layouts.master')

@prepend('meta')
    <meta name="verify-admitad" content="d00efc34aa" />
@endprepend

@prepend('css')
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
@endprepend

@section('title', 'E-skidka')

@section('content')
    <div class="banner">
        <div class="title_banner"><h1>Простой инструмент для экономии денежных средств</h1></div>
        <div class="banner_logo"><img src="img/main/banner_main_logo.svg" alt="Main banner"/></div>
        <div class="item_registry"><img src="img/main/banner_registry.svg" alt="Logo registry"/><p>Регистрируйтесь</p></div>
        <div class="item_pointer_first"><img src="img/main/banner_icon_right.svg" alt="Icon right"/></div>
        <div class="item_coupon"><img src="img/main/banner_click_logo.svg" alt="Icon click"/><p>Выбирайте купон</p></div>
        <div class="item_pointer_second"><img src="img/main/banner_icon_right.svg" alt="Icon right"/></div>
        <div class="item_link"><img src="img/main/banner_link_coupon.svg" alt="Icon link"/><p>Переходите на сайт магазина по купону</p></div>
    </div>
    <div class="items_shop">
        <div class="item_shop"><p>Empty.</p></div>
        <div class="button_all_coupons">
            <a href="/coupons"><button><img src="img/main/all_coupons_logo.svg" alt="All coupons"/><p>Все купоны</p></button></a>
        </div>
    </div>
    <div class="additional_tools">
        <h3>Дополнительные инструменты</h3>
        <div class="items_tool">
            <div class="item_smart_form">
                <a href="/smart-form"><img src="img/main/smart_form_tool_logo.svg" alt="Smart form"/></a>
                <p>Специальная форма для подбора оптимальных купонов по вашим предпочтениям и интересам</p>
            </div>
            <div class="transition_tools"><img src="img/main/transition_tools_logo.svg" alt="Tools"/></div>
            <div class="item_mnogo_skidok">
                <a href="http://mnogo-skidok.ru/"><img src="img/main/mnogo_skidok_tool_logo.svg" alt="Mnogo skidok"/></a>
                <p>Инструмент для экономии денежных средств на услугах в оффлайн режиме</p>
            </div>
        </div>
    </div>
    <div class="action_service">
        <h3>Начинай экономить прямо сейчас, без потери качества товаров и услуг</h3>
        <div class="action_buttons">
            <div class="button_action_registry">
                <a href="{{ route('register') }}"><button><img src="img/main/action_registry_logo.svg" alt="Registry"/><p>Зарегистрироваться</p></button></a>
            </div>
            <div class="button_action_entry">
                <a href="{{ route('login') }}"><button><img src="img/main/action_entry_logo.svg" alt="Entry"/><p>Войти</p></button></a>
            </div>
        </div>
    </div>
@endsection
