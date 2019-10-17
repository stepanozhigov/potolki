<?
$city = $city ?? App\City::find(1);
?>
<header class="header header_ceilings-form">
    <a href="{{ route('ceilings', $city) }}" class="header__logo logo">
        <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
        <img class="logo__text" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
    </a>
    <p class="header__direction">Фабрика натяжных потолков</p>
    <a href="tel:{{ $city->phone }}" class="text phone header__phone  red-hoverable"><img class="phone__icon" src="/img/gui/phone.svg" alt="">{{ $city->phone }} <span data-src="#popup_callback" class="js-show">заказать звонок</span></a>
    <a data-src="#popup_callback" class="text header__callback js-show">Заказать звонок</a>
</header>
<main class="page page_ceilingsForm">
