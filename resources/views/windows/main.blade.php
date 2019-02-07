@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="main-offer js-offer-slider" @if ($offers->count() > 1) data-offers="{{ $offers }}" id="js-offer-slider" @endif>
        <div class="main-offer__inner container">
            <p class="text main-offer__overtitle">Уникальное предложение</p>
            @php
                $texts = json_encode([
                    'Бесплатный выезд замерного мастера!',
                    'Успейте заказать сейчас!'
                ]);
            @endphp
            <h1 class="title main-offer__title js-writen" data-texts="{{$texts}}">Пластиковые окна со&nbspскидкой&nbsp30%</h1>
            <p class="main-offer__subtitle">Для получения скидки оставьте заявку</p>

            <form class="form main-offer__form mobile-hide" action="" id="offer-form">
                <input class="input form__input" type="text"  placeholder="Ваше имя">
                <input class="input form__input" type="tel"  placeholder="Ваш телефон">

                <button class="button form__button">Вызвать замерщика</button>

                <p class="form__agreement subtext subtext_white">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
            </form>
            <button data-src="#popup_callback" class="button main-offer__button mobile-only js-show">Вызвать замерщика</button>
        </div>
    </section>
    <section class="whyus whyus_main">
        @include('common.gui.titles', [
            'overtitle' =>  'Наши преимущества',
            'title' =>  "Звонят многим, заказывают у нас. Почему? ",
            'intro' =>  "Фабрика натяжных потолков &laquo;Твой стиль&raquo; основана в&nbsp;2003 году является лидером <br> по&nbsp;производству и&nbsp;установке натяжных потолков на&nbsp;Дальнем Востоке"
        ])
        <div class="whyus__content">
            <div class="whyus__item">
                <div class="whyus__item-info">
                    <h3 class="whyus__item-title">Наши преимущества</h3>
                    <ul>
                        <li class="whyus__item-text">— Контроль качества после установки</li>
                        <li class="whyus__item-text">— Собственное производство</li>
                        <li class="whyus__item-text">— Сервисное обслуживание</li>
                        <li class="whyus__item-text">— Услуга «Договор на дому»</li>
                        <li class="whyus__item-text">— 16 лет успешной работы</li>
                        <li class="whyus__item-text">— Гарантия низкой цены</li>
                        <li class="whyus__item-text">— Установка за 1 день</li>
                        <li class="whyus__item-text">— Контроль качества</li>
                    </ul>
                </div>
                <img class="whyus__item-image" src="/img/img_factory.jpg" alt="Производство">
            </div>
            <div class="whyus__item whyus__item_reverse">
                <div class="whyus__item-info">
                    <h3 class="whyus__item-title">Директор всегда на связи</h3>
                    <p class="whyus__item-text">
                        Я лично контролирую все этапы работы с помощью прямого контакта со своими клиентами. Вы можете написать мне в любую социальную сеть или позвонить. <br> Прямая линия обеспечивает ответственную работу каждого сотрудника. Считаю это самым важным фактором для моих клиентов.
                    </p>
                    <div class="signature">
                        <p>А. А. Репин</p>
                        <img src="/img/signature.png" alt="signature">
                    </div>
                    <div class="socials">
                        <a href="" class="socials__item">
                            <div class="socials__icon socials__icon_vk"></div>
                        </a>
                        <a href="" class="socials__item">
                            <div class="socials__icon socials__icon_youtube"></div>
                        </a>
                        <a href="" class="socials__item red-hoverable">
                            <div class="socials__icon socials__icon_fb"></div>
                        </a>
                        <a href="" class="socials__item">
                            <div class="socials__icon socials__icon_inst"></div>
                        </a>
                        <a href="" class="socials__item">
                            <div class="socials__icon socials__icon_whatsapp"></div>
                        </a>
                    </div>
                </div>
                <img class="whyus__item-image" src="/img/img_director.jpg" alt="Директор">
            </div>
            <a href="http://89.108.103.224/sochi/whyus" class="button button_gray">Остальные преимущества</a>
        </div>
    </section>
    <section class="catalog-cards container">
        @include('common.gui.titles', [
            'overtitle' =>  'Каталог',
            'secondTitle' =>  "Пластиковые окна {$city->name_formatted} от&nbspпроизводителя",
            'intro' =>  "Фабрика окон №1 {$city->name_formatted}. Посмотрите каталог и ниже рассчитайте ваш заказ <span class='intro_red'>за&nbsp5&nbspсекунд</span>"
        ])

        @foreach ($catalogTypes as $type)
            <? if ($type->id == 5) continue ?>
            <a href="{{ route('catalogue', ['city' => $city]) }}" class=" catalog-cards__item b-card is-hoverable">
                <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
                <p class="card-title catalog-cards__title">{{ $type->name }}</p>
                <hr class="line line_bold line_small catalog-cards__line">
                @if($type->price)
                    <p class="catalog-cards__price">от <span class="catalog-cards__number">{{ number_format($type->price, 0, ',', ' ') }} ₽</span></p>
                @endif
            </a>
        @endforeach
        <div class="buttons">
            <a href="{{ route('catalogue', $city) }}" class="button buttons__item button_gray">Перейти в каталог</a>
            <button class="button js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button>
        </div>
    </section>

    <section class="manufacturers manufacturers_main container">

        @include('common.gui.titles', ['secondTitle' => 'Производители профилей'])

        <div class="manufacturers__list">

            @foreach ($currentDirection->manufacturers as $manufacturer)
                <div class="manufacturers__item">
                    <img src="{{ Storage::url($manufacturer->logo) }}" alt="" class="manufacturers__item-image">
                    <p class="manufacturers__country"> Китай </p>
                </div>
            @endforeach
        </div>

    </section>

    <section class="calc-promo container">
        <div class="titles calc-promo__titles">
            <h2 class="second-title titles__second-title">Калькулятор стоимости</h2>
            <hr class="line titles__line">
            <p class="intro calc-promo__intro">
                Специально для вашего удобства мы&nbsp;разработали онлайн калькулятор стоимости будущего окна, балкона или двери. Вы&nbsp;можете прикинуть цену не&nbsp;выходя из&nbsp;дома и&nbsp;не&nbsp;дожидаясь замерщика. Выберите тип окна или балконного блока,
а&nbsp;так&nbsp;же размеры и&nbsp;другие параметры окна.
            </p>
            <a href="{{ route('calculator', $city) }}" class="button calc-promo__button">Рассчитать</a>
        </div>
        <img src="/img/windows/img_calculator.jpg" alt="">
    </section>

    <section class="portfolio b-texture b-texture_square">
        @include('common.gui.titles', ['secondTitle' => 'Примеры наших работ'])
        <button type="button" class="portfolio__prev" name="button"><img src="/img/gui/arrow_dark.png"></button>
        <div class="portfolio__carousel" id="portfolio__carousel" data-photos="{{ $photos }}">
            @foreach ($photos as $photo)
                <a class="case b-card portfolio__item portfolio__item_slide">
                    <p class="case__totals">{{ $photo->price }}  ₽ / {{ $photo->area }} м<sup>2</sup></p>
                    <img src="{{ Voyager::image( $photo->thumbnail('preview','src') ) }}" alt="{{ $photo->name }}" class="case__img">
                    <p class="card-title case__title">{{ $photo->name }}</p>
                </a>
            @endforeach
        </div>
        <button type="button" class="portfolio__next" name="button"><img src="/img/gui/arrow_dark.png"></button>
        <div class="buttons portfolio__buttons">
            <a href="{{ route('photos', $city) }}" class="button buttons__item button_gray">Посмотреть все работы</a>
            <button class="button js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button>
        </div>
    </section>

    <section class="reviews reviews_main container">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])

        @foreach($reviews as $review)
            @include('common.gui.review', $review)
        @endforeach

        <div class="buttons reviews__buttons">
            <a href="{{ route('reviews', $city) }}" class="button buttons__item button_gray">Прочитать все отзывы</a>
            <a href="{{ route('add-review', $city) }}" class="button">Оставить отзыв</a>
        </div>
    </section>
    @include('common.ourArticles')

    <section class="additional container">
        @include('common.gui.titles', ['secondTitle' => 'Также вас может заинтересовать'])
        <div class="additional__list">
            <div class="additional__item">
                <img src="/img/windows/additional__zhaluzi.png" alt="" width="201" height="166" class="additional__img">
                <p class="card-title">Жалюзи</p>
                <p class="text additional__text">
                    Если вы хотите защититься от палящих лучей летнего солнца – лучшего решения, чем купить жалюзи на окна, и не придумать.
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/home_deal.png" alt="" width="201" height="166" class="additional__img">
                <p class="card-title">Договор на дому</p>
                <p class="text additional__text">
                    Наш специалист приедет в удобное для вас время, произведет демонстрацию и даст все необходимые консультации
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/free_measure.png" alt="" width="201" height="166" class="additional__img">
                <p class="card-title">Бесплатный замер</p>
                <p class="text additional__text">
                    Технолог нашей компании произведет точный замер и расчет стоимости заказа в удобное для вас время
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/additional__percent.png" alt="" width="205" height="134" class="additional__img">
                <p class="card-title">Рассрочка до 3х лет</p>
                <p class="text additional__text">
                    Основной плюс рассрочки в отсутствии переплат. Итоговая сумма, не меняется с течением времени.
                </p>
            </div>
        </div>
    </section>
    @include('common.gui.survey')
    <section class="seo-block" @if($seoData->background_image) style="background: url({{ Storage::url($seoData->background_image) }})" @endif>
        <div class="seo-block__content container">
            <div class="seo-block__item">
                <h3>{!! str_replace('#city_title#', $city->name_formatted, $seoData->first_title) !!}</h3>
                {!! $seoData->first_text !!}
                @if ($seoData->firm_img)
                    <img src="{{ Storage::url($seoData->firm_img) }}" alt="" class="seo-block__img">
                @endif
            </div>
            <div class="seo-block__item">
                @if ($seoData->second_img)
                    <img src="{{ Storage::url($seoData->second_img) }}" alt="" class="seo-block__img">
                @endif
                <h3>{{ $seoData->second_title }}</h3>
                {!! $seoData->second_text !!}
            </div>
            <div class="seo-block__item">
                <h3>{{ $seoData->third_title }}</h3>
                {!! $seoData->third_text !!}
                @if ($seoData->third_img)
                    <img src="{{ Storage::url($seoData->third_img) }}" alt="" class="seo-block__img">
                @endif
            </div>
        </div>
    </section>
    @include('common.gui.footer')
@endsection
