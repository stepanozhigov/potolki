@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="main-offer main-offer_ceilings js-offer-slider">
        <div class="main-offer__inner container">
            <p class="text main-offer__overtitle">Монтаж за 1 день | Гарантия 30&nbsp;лет</p>
            
            <h1 class="title main-offer__title">Натяжные потолки<br> {!! $city->name_formatted !!} от&nbsp100&nbsp<span class="rouble">₽</span>/м<sup>2</sup></h1>
            <p class="main-offer__subtitle">Вызовите специалиста для замера&nbspи&nbsp;расчёта</p>

            <form class="form main-offer__form mobile-hide" action="/forms/add-lead" id="offer-form">
                @csrf
                <input type="hidden" name="city" value="{{ $city->bx_code }}">
                <input name="name" required class="input form__input" type="text" placeholder="Ваше имя">
                <input name="phone" required class="input form__input" type="tel" placeholder="Ваш телефон">

                <button type="submit" class="button form__button">Вызвать замерщика</button>
                <p class="form__status">Заявка отправлена, спасибо!</p>  
                <p class="form__agreement subtext subtext_white">Оставляя контактную информацию, вы&nbsp;соглашаетесь на&nbsp;обработку персональных данных</p>
            </form>
            <button data-src="#popup_callback" class="button main-offer__button mobile-only js-show">Вызвать замерщика</button>
        </div>
    </section>
    <section class="whyus whyus_main whyus_ceilings">
        <?
            $region = "на&nbsp;Дальнем Востоке";

            if ($city->code == 'krasnodar' || $city->code == 'sochi') {
                $region = 'в&nbsp;Краснодарском крае';
            }
            if ($city->code == 'moskva' || $city->code == 'dolgoprudnyj') {
                $region = 'в&nbsp;Москве и области';
            }
        ?>
        @include('common.gui.titles', [ 
            'overtitle' =>  'Наши преимущества',
            'title' =>  "Звонят многим, заказывают у нас. Почему? ",
            'intro' =>  "Фабрика натяжных потолков &laquo;Твой стиль&raquo; основана в&nbsp;2003 году. Является лидером по&nbsp;производству натяжных потолков&nbsp;{$region}."
        ])
        <div class="whyus__content">
            <div class="whyus__item">
                <div class="whyus__item-info">
                    <h2 class="whyus__item-title">Главные плюсы организации</h2>
                    <ul>
                        <li class="whyus__item-text">— Контроль качества после монтажа</li>
                        <li class="whyus__item-text">—&nbsp;Наличие своего производства</li>
                        <li class="whyus__item-text">— Подписание договора на дому</li>
                        
                        <li class="whyus__item-text">— Сервисное обслуживание</li>
                        <li class="whyus__item-text">— Установка за один день</li>
                        <li class="whyus__item-text">— Выгодные цены</li>
                        <li class="whyus__item-text">— 16 лет опыта</li>
                    </ul>
                </div>
                <img class="whyus__item-image" src="/img/gui/img_factory-2-min.jpg" alt="Производство">
                <!-- <img class="whyus__item-image" src="/img/gui/img_factory-2.jpg" srcset="/img/gui/img_factory-2.jpg 2x" alt="Производство"> -->
            </div>
            <div class="whyus__item whyus__item_reverse">
                <div class="whyus__item-info">
                    <h2 class="whyus__item-title">Директор всегда на связи</h2>
                    <p class="whyus__item-text">
                        Я лично контролирую все этапы работы с помощью прямого контакта со своими клиентами. Вы можете написать мне в любую социальную сеть или позвонить. <br> Прямая линия обеспечивает ответственную работу каждого сотрудника. Считаю это самым важным фактором для моих клиентов.
                    </p>
                    <div class="signature">
                        <p>А. А. Репин</p>
                        <img src="/img/signature.png" srcset="/img/signature2x.png 2x" alt="signature">
                    </div>
                    <div class="socials">
                        <a target="_blank" href="https://www.instagram.com/business_repin/" class="socials__item">
                            <div class="socials__icon socials__icon_insta"></div>
                        </a>
                        <a target="_blank" href="https://vk.com/business.repin" class="socials__item">
                            <div class="socials__icon socials__icon_vk"></div>
                        </a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=79996516666" class="socials__item">
                            <div class="socials__icon socials__icon_whatsapp"></div>
                        </a>
                    </div>
                </div>
                <img class="whyus__item-image" src="/img/img_director.jpg" alt="Директор">
            </div>
        </div>
        <div class="whyus__stat">
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">15</p>
                <p class="whyus__stat-text">лет гарантии <br>на потолки</p>
            </div>
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">3</p>
                <p class="whyus__stat-text">часа занимает <br> установка</p>
            </div>
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">397</p>
                <p class="whyus__stat-text">квадратных метров <br> в день</p>
            </div>
        </div>
    </section>
    <section class="catalog-cards catalog-cards_ceilings container ">
        @include('common.gui.titles', [
            'secondTitle' =>  "Натяжные потолки {$city->name_formatted} от&nbspпроизводителя",
            'intro' =>  "Фабрика натяжных потолков №1 {$city->name_formatted}. Посмотрите каталог и ниже рассчитайте ваш заказ <span class='intro_red'>за&nbsp5&nbspсекунд</span>"
        ])
        <div class="catalog-cards__content">
            @foreach ($catalogTypes as $type)
                <? if ($type->id == 5 || $type->type == 'rooms') continue ?>
                @if ($type->id == 23)
                    <a href="{{ route('photoprint', ['city' => $city]) }}" class=" catalog-cards__item b-card is-hoverable">
                @else
                    <a href="{{ route('catalogue', ['city' => $city, 'type' => $type]) }}" class=" catalog-cards__item b-card is-hoverable">
                @endif
                    <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
                    <div class="catalog-cards__item-info">
                        <h3 class="card-title catalog-cards__title">{{ $type->name }}</h3>
                        @if($type->price)
                            <p class="catalog-cards__price">от <span class="catalog-cards__number">{{ number_format($type->price, 0, ',', ' ') }} ₽/м2</span></p>
                        @endif
        				<button class="catalog-cards__open" type="button" name="button">
        					<img width="18" height="10" src="/img/arrow-down.svg" alt="arrow">
        				</button>
                    </div>

                </a>
            @endforeach
            
            <div class="buttons">
                <a href="{{ route('catalogueCeilings', ['city' => $city]) }}" class="button  button_gray">Перейти в каталог</a>
            </div>
        </div>

    </section>

    <div id="ceilings-calc">
        <ceilings-calc ></ceilings-calc>
    </div>
	<div class="discount">
		<p>Нашли дешевле?</p>
		<img src="/img/ceilings/Stamp Discount.svg" alt="">
		<p>Сделаем скидку!</p>
	</div>
    <section class="constructor">
        <div class="constructor__image"></div>
        <h2 class="constructor__title">Визуализация потолков</h2>
        <p class="constructor__text">Выберите цвет вашего потолка и посмотрите как это выглядит в интерьере при помощи конструктора.</p>
        <a class="constructor__link" href="{{ route('constructor', $city) }}">Конструктор</a>
    </section>
    <section class="portfolio portfolio_main portfolio_ceilings">
        @include('common.gui.titles', ['secondTitle' => 'Примеры наших работ'])
        <div class="portfolio__carousel" id="portfolio__carousel" data-photos="{{ $photos }}">
        </div>
        <div class="buttons portfolio__buttons">
			<a href="{{ route('photos', $city) }}" class="button button_gray">Посмотреть все работы</a>
			<button class="button buttons__item js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button>
        </div>
    </section>

    <section class="reviews reviews_main container">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])

        <div class="reviews__content">
            @foreach($reviews as $review)
                @include('common.gui.review', $review)
            @endforeach
        </div>

        <div class="buttons reviews__buttons">
			<a href="{{ route('reviews', $city) }}" class="button  button_gray">Все отзывы</a>
			<a href="{{ route('add-review', $city) }}" class="button buttons__item">Оставить отзыв</a>
        </div>
    </section>
    <!--<section class="articles articles_main articles_ceilings" id="articles">
        @include('common.gui.titles', [
            'class' =>  "container",
            'secondTitle' =>  "Социальные сети"
        ])
        <p class="articles__text">Нажмите на логотип социальной сети и посмотрите полезную информацию</p>
        <div class="socials titles__socials container">
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_insta"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_fb"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_vk"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_ok"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_youtube"></div>
            </a>
        </div>
        <posts :posts="{{ $articles }}"></posts>



       <a href="http://89.108.103.224/sochi/articles" class="articles__button">Все посты</a>

    </section>-->

    <section class="manufacturers manufacturers_main manufacturers_ceilings container">
        @include('common.gui.titles', [
            'secondTitle' =>  "Производители пленки"
        ])
        <p class="manufacturers__text">Компания &laquo;Твой стиль&raquo; ипользует плёнку для натяжных потолков ведущих мировых производителей. Мы&nbsp;предлагаем нашим клиентам только сертифицированные материалы. В&nbsp;нашем ассортименте можно выбрать полотна из&nbsp;пленки ПВХ и&nbsp;тканевые полотна следующих производителей.</p>
        <a class="manufacturers__more" href="javascript:void(0);">Подробнее</a>
        <div class="manufacturers__list" id="manufacturers__list"> 
            <div class="manufacturers__item">
                <img height="65px" src="/img/manufacturers/msd.svg" alt="" class="manufacturers__item-image">
            </div>
            <div class="manufacturers__item">
                <img height="80px" src="/img/manufacturers/ptmc.svg" alt="" class="manufacturers__item-image">
            </div>
            <div class="manufacturers__item">
                <img height="105px" src="/img/manufacturers/pongs (2).png" alt="" class="manufacturers__item-image">
            </div>
        </div>
    </section>

	<section class="seo-block seo-block_main seo-block_ceilings"
        @if ($seoData->background_mobile) data-backgr-mobile="url({{ Storage::url($seoData->background_mobile) }})" @endif
        @if ($seoData->background_tablet) data-backgr-tablet="url({{ Storage::url($seoData->background_tablet) }})" @endif
        @if($seoData->background_image) style="background-image: url({{ Storage::url($seoData->background_image) }})" @endif
    >
        <div class="seo-block__content">
			<div class="seo-block__item seo-block__item_numbered">
                <div class="seo-block__item-text">
                    <h3 class="seo-block__item-title">{!! str_replace('#city_title#', $city->name_formatted, $seoData->first_title) !!}</h3>
    				{!! str_replace('#city_title#', $city->name_formatted, $seoData->first_text) !!}
                </div>
				@if ($seoData->firm_img)
                    <div data-src="#videoBlock" class="seo-block__item-videoblock js-show">
                        <img src="{{ Storage::url($seoData->firm_img) }}" alt="" class="seo-block__item-video">
                        <p>Видео о компании</p>
                    </div>
				@endif
			</div>
			<div class="seo-block__item seo-block__item_numbered seo-block__item_reverse">
                <div class="seo-block__item-text">
                    <h3 class="seo-block__item-title">{{ $seoData->second_title }}</h3>
    				{!! $seoData->second_text !!}
                </div>
				@if ($seoData->second_img)
					<img src="{{ Storage::url($seoData->second_img) }}" alt="" class="seo-block__item-img">
				@endif
			</div>
			<div class="seo-block__item seo-block__item_numbered">
                <div class="seo-block__item-text">
                    <h3 class="seo-block__item-title">{{ $seoData->third_title }}</h3>
    				{!! $seoData->third_text !!}
                </div>
				@if ($seoData->third_img)
					<img src="{{ Storage::url($seoData->third_img) }}" alt="" class="seo-block__item-img">
				@endif
			</div>
        </div>
    </section>

    <section class="additional additional_ceilings container">
        @include('common.gui.titles', [
            'secondTitle' =>  "Также вас может заинтересовать"
        ])
        <div class="additional__list">
            <a href="{{ route('services', [request()->route()->city, 'deal']) }}" class="additional__item is-hoverable">
                <img src="/img/windows/home_deal.png" alt="" width="201" height="166" class="additional__img">
                <h3 class="additional__title">Договор на дому</h3>
                <p class="text additional__text">
                    Для вашего удобства замерный <br> мастер  может заключить договор&nbsp;у&nbsp;вас&nbsp;дома.
                </p>
            </a>
            <a href="{{ route('lamps', request()->route()->city) }}" class="additional__item is-hoverable">
                <img src="/img/ceilings/lamp.png" alt="" width="205" height="134" class="additional__img">
                <h3 class="additional__title">Светильники</h3>
                <p class="text additional__text">
                    Приобретите специальные светильники<br>для натяжных потолков<br>в офисе продаж.
                    
                </p>
            </a>
            <a href="{{ route('services', [request()->route()->city, 'measurements']) }}" class="additional__item is-hoverable">
                <img src="/img/windows/free_measure.png" alt="" width="201" height="166" class="additional__img">
                <h3 class="additional__title">Бесплатный замер</h3>
                <p class="text additional__text">
                    Наш технолог произведет <br> замер и&nbsp;расчет стоимости заказа <br> в&nbsp;удобное&nbsp;для&nbsp;вас&nbsp;время.
                </p>
            </a>
        </div>
    </section>
    @include('common.gui.survey')

    @include('common.gui.footer')
@endsection
