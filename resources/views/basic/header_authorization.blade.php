<header>
    <div class="logo">
        <a href="{{ route('index') }}"><img src="img/logo.svg" alt="Logo"/></a>
    </div>
    <div class="user_profile">
        <a href="{{ route('profile') }}"><img src="img/user_auth_logo.svg" alt="Profile"/></a>
    </div>
    <div class="exit_profile">
        <a href="{{ route('index') }}"><img src="img/exit_logo.svg" alt="Exit"/></a>
    </div>
    <div class="line">
        <hr>
    </div>
    <nav>
        <div class="header_menu">
            <ul>
                <a href="{{ route('coupons') }}"><li><img src="img/coupon_logo.svg" alt="Logo"/><p>Купоны</p></li></a>
                <a href="{{ route('smart-form') }}"><li><img src="img/smart_form_logo.svg" alt="Logo"/><p>Smart форма</p></li></a>
                <a href="{{ route('index') }}"><li><img src="img/service_logo.svg" alt="Logo"/><p>О сервисе</p></li></a>
            </ul>
        </div>
        <div class="mnogo_skidok">
            <a href="http://mnogo-skidok.ru/"><img src="img/mnogo_skidok.svg" alt="Mnogo-skidok"/></a>
        </div>
    </nav>
</header>
