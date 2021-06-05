<header>
    <div class="logo">
        <a href="{{ route('index') }}"><img src="{{ asset('img/main/logo.svg') }}" alt="Logo"/></a>
    </div>
    <div class="button_entry">
        <a href="{{ route('login') }}"><button><p>Вход</p></button></a>
    </div>
    <div class="button_registry">
        <a href="{{ route('register') }}"><button><p>Регистрация</p></button></a>
    </div>
    <div class="line">
        <hr>
    </div>
    <nav>
        <div class="header_menu">
            <ul>
                <li><a href="{{ route('coupons') }}"><img src="{{ asset('img/main/coupon_logo.svg') }}" alt="Logo"/><p>Купоны</p></a></li>
                <li><a href="{{ route('smart-form') }}"><img src="{{ asset('img/main/smart_form_logo.svg') }}" alt="Logo"/><p>Smart форма</p></a></li>
                <li><a href="{{ route('index') }}"><img src="{{ asset('img/main/service_logo.svg') }}" alt="Logo"/><p>О сервисе</p></a></li>
            </ul>
        </div>
        <div class="mnogo_skidok">
            <a href="http://mnogo-skidok.ru/"><img src="{{ asset('img/main/mnogo_skidok.svg') }}" alt="Mnogo-skidok"/></a>
        </div>
    </nav>
</header>
