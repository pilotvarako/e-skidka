<header>
    <div class="logo">
        <a href="{{ route('index') }}"><img src="{{ asset('img/main/logo.svg') }}" alt="Logo"/></a>
    </div>
    <div class="button_entry">
        <a href="{{ route('login') }}"><p><button>Вход</button></p></a>
    </div>
    <div class="button_registry">
        <a href="{{ route('register') }}"><p><button>Регистрация</button></p></a>
    </div>
    <div class="line">
        <hr>
    </div>
    <nav>
        <div class="header_menu">
            <ul>
                <a href="{{ route('coupons') }}"><li><img src="{{ asset('img/main/coupon_logo.svg') }}" alt="Logo"/><p>Купоны</p></li></a>
                <a href="{{ route('smart-form') }}"><li><img src="{{ asset('img/main/smart_form_logo.svg') }}" alt="Logo"/><p>Smart форма</p></li></a>
                <a href="{{ route('index') }}"><li><img src="{{ asset('img/main/service_logo.svg') }}" alt="Logo"/><p>О сервисе</p></li></a>
            </ul>
        </div>
        <div class="mnogo_skidok">
            <a href="http://mnogo-skidok.ru/"><img src="{{ asset('img/main/mnogo_skidok.svg') }}" alt="Mnogo-skidok"/></a>
        </div>
    </nav>
</header>
