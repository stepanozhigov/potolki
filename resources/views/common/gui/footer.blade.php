
@empty($skipOffer)
    @include('common.footer-offer')
@endempty

<div class="popup" id="popup_callback">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    @include('common.forms.callback')
</div>

<div class="popup" id="credit_popup">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    @include('common.forms.credit')
</div>

<div class="popup" id="popup_survey">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    @include('common.forms.survey')
</div>
<div class="popup" id="popup_articles">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    @include('common.article-form')
</div>
<div id="overlay" class="overlay js-close"></div>
</main>



<footer role="contentinfo" class="footer">
    <div class="footer__row container">
        <div class="footer__contacts">

            <a href="tel:{{ $city->phone }}" class="text phone footer__phone red-hoverable">
                <img class="phone__icon" src="/img/gui/phone_new.png" alt="">
                {{ $city->phone }}
                <span class="subtext phone__time footer__time">Круглосуточно | Бесплатно</span>
            </a>
            <a href="mailto:{{ $city->email }}" class="text text_white footer__mail red-hoverable"><img class="footer__icon" src="/img/gui/mail_new.png" alt="">{{ $city->email }}</a>

            <a href="{{ route('contacts', $city) }}" class="text text_white footer__offices red-hoverable"><img class="footer__icon" src="/img/gui/pin_new.png" alt=""> Наши офисы</a>
            <div class="socials">
                <a target="_blank" href="https://www.instagram.com/business_repin/" class="socials__item">
                    <div class="socials__icon socials__icon_inst"></div>
                </a>
                <a target="_blank" href="https://www.instagram.com/business_repin/" class="socials__item">
                    <div class="socials__icon socials__icon_fb"></div>
                </a>
                <a target="_blank" href="https://vk.com/business.repin" class="socials__item">
                    <div class="socials__icon socials__icon_vk"></div>
                </a>
                <a target="_blank" href="https://ok.ru/profile/589436377360" class="socials__item">
                    <div class="socials__icon socials__icon_youtube"></div>
                </a>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=79996516666" class="socials__item">
                    <div class="socials__icon socials__icon_ok"></div>
                </a>
            </div>
        </div>
        <nav class="footer__nav">
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Каталог</a>
                <a href="{{ route('catalogue', ['city' => $city]) }}" class="red-hoverable subtext subtext_white nav-group__item">Балконы</a>
                <a href="{{ route('catalogue', ['city' => $city]) }}" class="red-hoverable subtext subtext_white nav-group__item">Окна</a>
                <!--<a href="{{ route('calculator', ['city' => $city, 'type' => 'dveri']) }}" class="red-hoverable subtext subtext_white nav-group__item">Двери</a>
                <a href="{{ route('calculator', ['city' => $city, 'type' => 'peregorodki']) }}" class="red-hoverable subtext subtext_white nav-group__item">Перегородки</a>
                <a href="{{ route('calculator', ['city' => $city, 'type' => 'zhalyuzi']) }}" class="red-hoverable subtext subtext_white nav-group__item">Жалюзи</a>-->
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Услуги</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'measurements']) }}" class="red-hoverable subtext subtext_white nav-group__item">Бесплатный замер</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'install']) }}" class="red-hoverable subtext subtext_white nav-group__item">Установка</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'delivery']) }}" class="red-hoverable subtext subtext_white nav-group__item">Доставка</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'repair']) }}" class="red-hoverable subtext subtext_white nav-group__item">Ремонт</a>
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Наши работы</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'peregorodki']) }}" class="red-hoverable subtext subtext_white nav-group__item">Перегородки</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'zhalyuzi']) }}" class="red-hoverable subtext subtext_white nav-group__item">Жалюзи</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'balkony']) }}" class="red-hoverable subtext subtext_white nav-group__item">Балконы</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'dveri']) }}" class="red-hoverable subtext subtext_white nav-group__item">Двери</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'okna']) }}" class="red-hoverable subtext subtext_white nav-group__item">Окна</a>
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Акции</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'credit']) }}" class="red-hoverable subtext subtext_white nav-group__item">Рассрочка</a>
                <a href="{{ route('promos', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Скидки</a>
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Информация</a>
                <a href="{{ route('dirMessage', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Написать директору</a>
                <a href="{{ route('about', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">О компании</a>
                <a href="{{ route('contacts', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Контакты</a>
                <a href="{{ route('reviews', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Отзывы</a>
                <a href="{{ route('articles', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Статьи</a>
            </div>
        </nav>
    </div>
    <div class="footer__row footer__row_dark">
        <div class="container footer__copyright">
            <div class="footer__company">
                <a href="{{ route('windows.main', $city) }}" class="logo logo_white footer__logo">
                    <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
                    <img class="logo__text" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
                </a>
                <p class=" subtext footer__text"><span>&copy;  2003 – {{ date('Y') }}  ООО «Твой Стиль» </span> <span>Все права защищены</span> </p>
            </div>
			<a data-title="Оценить сайт" data-button="Отправить отзыв" data-src="#popup_survey" class="footer__survey js-showup" href="javascript:void(0);">Оценить сайт</a>
            <p class="footer__dev subtext footer__text">
                Разработка и продвижение <a href="http://trend-p.ru" target="_blank" class="text footer__text red-hoverable" target="_blank">TREND PRO</a>
            </p>
        </div>
    </div>
</footer>
