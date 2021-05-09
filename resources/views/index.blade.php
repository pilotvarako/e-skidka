<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>E-skidka</title>
        <link rel="stylesheet" type="text/css" href="css/index.css"/>
    </head>
<body>

    @include('basic.header_standart')

    <main>
        <div class="banner">
            <div class="title_banner"><h1>Простой инструмент для экономии денежных средств</h1></div>
            <div class="banner_logo"><img src="img/banner_main_logo.svg" alt="Main banner"/></div>
            <div class="item_registry"><img src="img/banner_registry.svg" alt="Logo registry"/><p>Регистрируйтесь</p></div>
            <div class="item_pointer_first"><img src="img/banner_icon_right.svg" alt="Icon right"/></div>
            <div class="item_coupon"><img src="img/banner_click_logo.svg" alt="Icon click"/><p>Выбирайте купон</p></div>
            <div class="item_pointer_second"><img src="img/banner_icon_right.svg" alt="Icon right"/></div>
            <div class="item_link"><img src="img/banner_link_coupon.svg" alt="Icon link"/><p>Переходите на сайт магазина по купону</p></div>
        </div>
        <div class="items_shop">
            <div class="item_shop"><p>Empty.</p></div>
            <div class="button_all_coupons">
                <a href="/coupons"><button><img src="img/all_coupons_logo.svg" alt="All coupons"/><p>Все купоны</p></button></a>
            </div>
        </div>
        <div class="additional_tools">
            <h3>Дополнительные инструменты</h3>
            <div class="items_tool">
                <div class="item_smart_form">
                    <a href="/smart-form"><img src="img/smart_form_tool_logo.svg" alt="Smart form"/></a>
                    <p>Специальная форма для подбора оптимальных купонов по вашим предпочтениям и интересам</p>
                </div>
                <div class="transition_tools"><img src="img/transition_tools_logo.svg" alt="Tools"/></div>
                <div class="item_mnogo_skidok">
                    <a href="http://mnogo-skidok.ru/"><img src="img/mnogo_skidok_tool_logo.svg" alt="Mnogo skidok"/></a>
                    <p>Инструмент для экономии денежных средств на услугах в оффлайн режиме</p>
                </div>
            </div>
        </div>
        <div class="action_service">
            <h3>Начинай экономить прямо сейчас, без потери качества товаров и услуг</h3>
            <div class="action_buttons">
                <div class="button_action_registry">
                    <a href="/registration"><button><img src="img/action_registry_logo.svg" alt="Registry"/><p>Зарегистрироваться</p></button></a>
                </div>
                <div class="button_action_entry">
                    <a href="/authorization"><button><img src="img/action_entry_logo.svg" alt="Entry"/><p>Войти</p></button></a>
                </div>
            </div>
        </div>
    </main>

    @include('basic.footer')

</body>
</html>
