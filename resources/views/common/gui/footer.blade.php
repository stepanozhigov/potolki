
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
<div class="popup" id="condition_popup">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    @include('climat.conditionerPopup')
</div>
<div class="popup" id="formAdressPopup">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    @include('climat.formAdress')
</div>
<div class="popup" id="formUrPopup">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    @include('climat.formUr')
</div>
<div class="popup" id="quickBuy">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    @include('climat.quickBuy')
</div>
<div class="popup" id="videoBlock">
    <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    <iframe width="900" height="506" src="https://www.youtube.com/embed/ZzBDdgLxTxE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
				@foreach($city->socials as $social)
					@if ($social->direction_id == 1)
						<a target="_blank" href="{{ $social->link }}" class="socials__item">
							<div class="socials__icon socials__icon_{{ $social->icon }}"></div>
						</a>
					@endif
				@endforeach
            </div>
        </div>
        <nav class="footer__nav">
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Каталог товаров</a>
                <a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Бытовые кондиционеры</a>
                <a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Коммерческие кондиционеры</a>
                <a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Чиллер-фанкоил системы</a>
                <a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Крышные кондиционеры</a>
                <a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">VRV и VRF системы</a>
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Услуги</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'delivery']) }}" class="red-hoverable subtext subtext_white nav-group__item">Доставка</a>
				<a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Монтаж и настройка</a>
				<a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Проектирование систем</a>
				<a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Сервисное обслуживание</a>
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Информация</a>
				<a href="{{ route('about', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">О компании</a>
				<a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Доставка и оплата</a>
				<a href="{{ route('reviews', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Отзывы клиентов</a>
				<a href="{{ route('contacts', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Контактная информация</a>
				<a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Партнерам</a>
				<a href="javascript:void(0);" class="red-hoverable subtext subtext_white nav-group__item">Помощь в выборе</a>
        </nav>
    </div>
    <div class="footer__row footer__row_dark">
        <div class="container footer__copyright">
            <div class="footer__company">
                <a href="{{ route('windows.main', $city) }}" class="logo logo_white footer__logo">
                    <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
                    <img class="logo__text" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
                </a>
                <p class=" subtext footer__text"><span>&copy;  2003 – {{ date('Y') }}  ООО «Твой Стиль» </span></p>
            </div>
			<a data-title="Оценить сайт" data-button="Отправить отзыв" data-src="#popup_survey" class="footer__survey js-showup" href="javascript:void(0);">Оценить сайт</a>
            <p class="footer__dev subtext footer__text">
                Разработка и продвижение <a href="http://trend-p.ru" target="_blank" class="text footer__text red-hoverable" target="_blank">TREND PRO</a>
            </p>
        </div>
    </div>
</footer>
