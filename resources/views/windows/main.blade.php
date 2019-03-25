@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="main-offer js-offer-slider" @if ($offers->count() >= 1) data-offers="{{ $offers }}" id="js-offer-slider" @endif>
        <div class="main-offer__inner container">
            <p class="text main-offer__overtitle">Монтаж за 1 день | Гарантия 30&nbsp;лет</p>
            @php
                $texts = json_encode([
                    'Бесплатный выезд замерного мастера!',
                    'Успейте заказать сейчас!'
                ]);
            @endphp
            <h1 class="title main-offer__title js-writen" data-texts="{{$texts}}">Пластиковые окна со&nbspскидкой&nbsp30%</h1>
            <p class="main-offer__subtitle">Вызовите специалиста для&nbsp;замера и&nbsp;расчёта</p>

            <form class="form main-offer__form mobile-hide" action="" id="offer-form">
                <input class="input form__input" type="text"  placeholder="Ваше имя">
                <input class="input form__input" type="tel"  placeholder="Ваш телефон">

                <button class="button form__button">Вызвать замерщика</button>
				<p class="form__status">Заявка отправлена, спасибо!</p>
                <p class="form__agreement subtext subtext_white">Оставляя контактную информацию, вы соглашаетесь <br>  на обработку персональных данных</p>
            </form>
            <button data-src="#popup_callback" class="button main-offer__button mobile-only js-show">Вызвать замерщика</button>
        </div>
    </section>
    <section class="whyus whyus_main">
        @include('common.gui.titles', [
            'overtitle' =>  'Наши преимущества',
            'title' =>  "Звонят многим, заказывают у нас. Почему? ",
            'intro' =>  "Компания &laquo;Твой стиль&raquo; основана в&nbsp;2003&nbsp;году. Является лидером по&nbsp;производству пластиковых окон {$city->name_formatted}"
        ])
        <div class="whyus__content">
            <div class="whyus__item">
                <div class="whyus__item-info">
                    <h3 class="whyus__item-title">Наши преимущества </h3>
                    <ul>
                        <li class="whyus__item-text">— Контроль качества после установки</li>
                        <li class="whyus__item-text">— Собственное производство</li>
                        <li class="whyus__item-text">— Сервисное обслуживание</li>
                        <li class="whyus__item-text">— Услуга «Договор на дому»</li>
                        <li class="whyus__item-text">— 16 лет успешной работы</li>
                        <li class="whyus__item-text">— Гарантия низкой цены</li>
                        <li class="whyus__item-text">— Монтаж за 1 день</li>
                    </ul>
                </div>
                <img class="whyus__item-image" src="/img/gui/factory_whyus_windows.jpg" srcset="/img/gui/factory_whyus_windows@2x.jpg 2x" alt="Производство">
            </div>
            <div class="whyus__item whyus__item_reverse">
                <div class="whyus__item-info">
                    <h3 class="whyus__item-title">Директор всегда на связи</h3>
                    <p class="whyus__item-text">
                        Я лично контролирую все этапы работы с помощью прямого контакта со своими клиентами. Вы можете написать мне в любую социальную сеть или позвонить. <br> Прямая линия обеспечивает ответственную работу каждого сотрудника. Считаю это самым важным фактором для моих клиентов.
                    </p>
                    <div class="signature">
                        <p>А. А. Репин</p>
                        <img src="/img/signature.png" srcset="/img/signature2x.png 2x" alt="signature">
                    </div>
                    <div class="socials">
                        <a target="_blank" href="https://www.instagram.com/business_repin/" class="socials__item">
                            <div class="socials__icon socials__icon_inst"></div>
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
                <p class="whyus__stat-num">30</p>
                <p class="whyus__stat-text">лет гарантии <br>на окна</p>
            </div>
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">3</p>
                <p class="whyus__stat-text">часа занимает <br> установка</p>
            </div>
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">790</p>
                <p class="whyus__stat-text">окон устанавливаем <br> в месяц</p>
            </div>
        </div>
    </section>
    <section class="catalog-cards container">
        @include('common.gui.titles', [
            'overtitle' =>  'Каталог',
            'secondTitle' =>  "Каталог пластиковых окон {$city->name_formatted}",
            'intro' =>  "Фабрика окон №1 {$city->name_formatted}. Посмотрите каталог и ниже рассчитайте ваш заказ <span class='intro_red'>за&nbsp5&nbspсекунд</span>."
        ])

        @foreach ($catalogTypes as $type)
            <? if ($type->id == 5) continue ?>
            <a href="{{ route('catalogue', ['city' => $city]) }}" class=" catalog-cards__item b-card is-hoverable">
                <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
                <div class="catalog-cards__item-info">
                    <h3 class="card-title catalog-cards__title">{{ $type->name }}</h3>
                    @if($type->price)
                        <p class="catalog-cards__price">от <span class="catalog-cards__number">{{ number_format($type->price, 0, ',', ' ') }} ₽</span></p>
                    @endif
    				<button class="catalog-cards__open" type="button" name="button">
    					<img width="18" height="10" src="/img/arrow-down.svg" alt="arrow">
    				</button>
                </div>

            </a>
        @endforeach
        <div class="buttons">
            <a href="{{ route('catalogue', $city) }}" class="button  button_gray">Перейти в каталог</a>
        </div>
    </section>

    <section class="calc-promo container">
        <div class="calc-promo__titles">
            <h2 class="titles__second-title">Калькулятор стоимости</h2>
            <p class="intro calc-promo__intro">
Стоимость&nbsp;&mdash; один из&nbsp;важных факторов при принятии решения в&nbsp;выборе компании. Нажмите кнопку &laquo;Рассчитать&raquo; и&nbsp;через&nbsp;5&nbsp;секунд вы&nbsp;будете знать примерную стоимость вашего изделия. Акция &laquo;Найдете дешевле&nbsp;&mdash; снизим цену&raquo; дает гарантию самой низкой цены {{$city->name_formatted}}.
            </p>
            <a href="{{ route('calculator', $city) }}" class="button calc-promo__button">Рассчитать</a>
        </div>
        <img src="/img/windows/img_calculator.jpg" srcset="/img/img_calculator2x.jpg 2x" alt="">
    </section>

    <section class="portfolio portfolio_main b-texture b-texture_square">
        @include('common.gui.titles', ['secondTitle' => 'Примеры наших работ'])
        <div class="portfolio__carousel" id="portfolio__carousel" data-photos="{{ $photos }}">
            @foreach ($photos as $photo)
                <a class="case b-card portfolio__item portfolio__item_slide">
                    <p class="case__totals">{{ $photo->price }}  ₽ / {{ $photo->area }} м<sup>2</sup></p>
                    <img src="{{ Voyager::image( $photo->thumbnail('preview','src') ) }}" alt="{{ $photo->name }}" class="case__img">
                    <p class="card-title case__title">{{ $photo->name }}</p>
                </a>
            @endforeach
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
    <section class="articles articles_main" id="articles">
        @include('common.gui.titles', [
            'class' =>  "container",
            'secondTitle' =>  "Социальные сети",
            'intro' =>  "Нажмите на&nbsp;логотип социальной сети и&nbsp;посмотрите там полезную информацию."
        ])
        <div class="socials titles__socials container">
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_inst"></div>
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

    </section>
    <section class="manufacturers manufacturers_main container">

        @include('common.gui.titles', ['secondTitle' => 'Производители профилей'])

        <div id="manufacturers__list"></div>

    </section>
    <section class="seo-block" @if($seoData->background_image) style="background-image: url({{ Storage::url($seoData->background_image) }})" @endif>
        <div class="seo-block__content container">
            <div class="seo-block__list">
                <div class="seo-block__item">
                    <h3 class="seo-block__item-title">{!! str_replace('#city_title#', $city->name_formatted, $seoData->first_title) !!}</h3>
                    {!! $seoData->first_text !!}
                    @if ($seoData->firm_img)
                        <img src="{{ Storage::url($seoData->firm_img) }}" alt="" class="seo-block__img">
                    @endif
                </div>
                <div class="seo-block__item seo-block__item_reverse">
                    <h3 class="seo-block__item-title">{{ $seoData->second_title }}</h3>
                    {!! $seoData->second_text !!}
                    @if ($seoData->second_img)
                        <img src="{{ Storage::url($seoData->second_img) }}" alt="" class="seo-block__img">
                    @endif
                </div>
                <div class="seo-block__item">
                    <h3 class="seo-block__item-title">{{ $seoData->third_title }}</h3>
                    {!! $seoData->third_text !!}
                    @if ($seoData->third_img)
                        <img src="{{ Storage::url($seoData->third_img) }}" alt="" class="seo-block__img">
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="additional container">
        @include('common.gui.titles', ['secondTitle' => 'Также вас может заинтересовать'])
        <div class="additional__list">
            <div class="additional__item">
                <img src="/img/windows/free_measure.png" alt="" width="201" height="166" class="additional__img">
                <h3 class="additional__title">Бесплатный замер</h3>
                <p class="text additional__text">
                    Наш технолог произведет <br> замер и&nbsp;расчет стоимости заказа <br> в&nbsp;удобное&nbsp;для&nbsp;вас&nbsp;время.
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/home_deal.png" alt="" width="201" height="166" class="additional__img">
                <h3 class="additional__title">Договор на дому</h3>
                <p class="text additional__text">
                    Для вашего удобства замерный <br> мастер  может заключить договор&nbsp;у&nbsp;вас&nbsp;дома.
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/additional__percent.png" alt="" width="205" height="134" class="additional__img">
                <h3 class="additional__title">Рассрочка до 3х лет</h3>
                <p class="text additional__text">
                    Беспроцентная рассрочка даёт <br> возможность установить окна, даже если <br> нет необходимой&nbsp;суммы.
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/additional__zhaluzi.png" alt="" width="201" height="166" class="additional__img">
                <h3 class="additional__title">Жалюзи</h3>
                <p class="text additional__text">
                    Лучшее решение для оформления оконного <br> пространства. Смотрится красиво&nbsp;и&nbsp;современно.
                </p>
            </div>
        </div>
    </section>
    @include('common.gui.survey')
    @include('common.gui.footer')
@endsection
