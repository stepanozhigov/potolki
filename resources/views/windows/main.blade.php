@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="main-offer js-offer-slider" @if ($offers->count() >= 1) data-offers="{{ $offers }}" id="js-offer-slider" @endif>
        <div class="main-offer__inner container">
            <p class="text main-offer__overtitle">Уникальное предложение</p>
            @php
                $texts = json_encode([
                    'Бесплатный выезд замерного мастера!',
                    'Успейте заказать сейчас!'
                ]);
            @endphp
            <h1 class="title main-offer__title js-writen" data-texts="{{$texts}}">Пластиковые окна со&nbspскидкой&nbsp30%</h1>
            <p class="main-offer__subtitle">Вызовите специалиста для замера и&nbsp;расчёта</p>

            <form class="form main-offer__form mobile-hide" action="" id="offer-form">
                <input class="input form__input" type="text"  placeholder="Ваше имя">
                <input class="input form__input" type="tel"  placeholder="Ваш телефон">

                <button class="button form__button">Вызвать замерщика</button>

                <p class="form__agreement subtext subtext_white">Оставляя контактную информацию, вы соглашаетесь <br>  на обработку персональных данных</p>
            </form>
            <button data-src="#popup_callback" class="button main-offer__button mobile-only js-show">Вызвать замерщика</button>
        </div>
    </section>
    <section class="whyus whyus_main">
        @include('common.gui.titles', [
            'overtitle' =>  'Наши преимущества',
            'title' =>  "Звонят многим, заказывают у нас. Почему? ",
            'intro' =>  "Фабрика пластиковых окон &laquo;Твой стиль&raquo; основана в&nbsp;2003 году. Является лидером по&nbsp;производству и&nbsp;установке натяжных потолков&nbsp;на&nbsp;Дальнем Востоке."
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
                        <li class="whyus__item-text">— Установка за 1 день</li>
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
                        <img src="/img/signature.png" srcset="/img/signature2x.png 2x" alt="signature">
                    </div>
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
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=79996516666" class="socials__item">
                            <div class="socials__icon socials__icon_whatsapp"></div>
                        </a>
                        <a target="_blank" href="https://ok.ru/profile/589436377360" class="socials__item">
                            <div class="socials__icon socials__icon_ok"></div>
                        </a>
                    </div>
                </div>
                <img class="whyus__item-image" src="/img/img_director.jpg" alt="Директор">
            </div>
            <button class="whyus__button" type="button" name="button">Преимущества в цифрах</button>
        </div>
        <div class="whyus__stat">
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">15</p>
                <p class="whyus__stat-text">лет гарантия на наши потолки, с сервисным обсуживанием</p>
            </div>
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">3</p>
                <p class="whyus__stat-text">часа устанавливается потолок площадью 16 квадратных метров</p>
            </div>
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">397</p>
                <p class="whyus__stat-text">квадратных метров устанавливаем за день, это 26 910 в месяц</p>
            </div>
        </div>
    </section>
    <section class="catalog-cards container">
        @include('common.gui.titles', [
            'overtitle' =>  'Каталог',
            'secondTitle' =>  "Пластиковые окна {$city->name_formatted}",
            'intro' =>  "Фабрика окон №1 {$city->name_formatted}. Посмотрите каталог и ниже рассчитайте ваш заказ <span class='intro_red'>за&nbsp5&nbspсекунд</span>."
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

    <section class="calc-promo container">
        <div class="calc-promo__titles">
            <h2 class="titles__second-title">Калькулятор стоимости</h2>
            <p class="intro calc-promo__intro">
Стоимость&nbsp;&mdash; один из&nbsp;важных факторов принятие решения в&nbsp;выборе компании. Нажмите кнопку &laquo;Рассчитать&raquo; и&nbsp;за&nbsp;5&nbsp;секунд вы&nbsp;будете знать стоимость вашего изделия. Акция &laquo;Найдете дешевле&nbsp;&mdash; Снизим цену&raquo; дает вам гарантию самой низкой цены {{$city->name_formatted}}.
            </p>
            <a href="{{ route('calculator', $city) }}" class="button calc-promo__button">Рассчитать</a>
        </div>
        <img src="/img/windows/img_calculator.jpg" alt="">
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
            <a href="{{ route('photos', $city) }}" class="button buttons__item button_gray">Посмотреть все работы</a>
            <button class="button js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button>
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
            <a href="{{ route('reviews', $city) }}" class="button buttons__item button_gray">Все отзывы</a>
            <a href="{{ route('add-review', $city) }}" class="button">Оставить отзыв</a>
        </div>
    </section>
    <section class="articles articles_main" id="articles">
        @include('common.gui.titles', [
            'class' =>  "container",
            'secondTitle' =>  "Наши посты из&nbsp;социальных сетей",
            'intro' =>  "Посмотрите посты в&nbsp;удобной для вас социальной сети, либо нажмите кнопку &laquo;Все посты&raquo; и&nbsp;на&nbsp;новой странице вы&nbsp;можете отфильтровать и&nbsp;посмотреть интересную&nbsp;информацию."
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
        <div class="articles__list">
            <posts :posts="{{ $articles }}"></posts>
        </div>

       <a href="http://89.108.103.224/sochi/articles" class="articles__button">Все посты</a>

    </section>
    <section class="manufacturers manufacturers_main container">

        @include('common.gui.titles', ['secondTitle' => 'Производители профилей'])

        <div id="manufacturers__list">
        </div>

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
                    Технолог нашей компании произведет <br> точный замер и&nbsp;расчет стоимости заказа <br> в&nbsp;удобное&nbsp;для&nbsp;вас&nbsp;время.
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/home_deal.png" alt="" width="201" height="166" class="additional__img">
                <h3 class="additional__title">Договор на дому</h3>
                <p class="text additional__text">
                    Для вашего удобства замерный мастер <br> может рассчитать и&nbsp;заключить <br> договор&nbsp;у&nbsp;вас&nbsp;дома.
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/additional__percent.png" alt="" width="205" height="134" class="additional__img">
                <h3 class="additional__title">Рассрочка до 3х лет</h3>
                <p class="text additional__text">
                    Беспроцентная рассрочка даёт <br> возможность установить потолок, если <br> сразу нет необходимой&nbsp;суммы&nbsp;денег.
                </p>
            </div>
            <div class="additional__item">
                <img src="/img/windows/additional__zhaluzi.png" alt="" width="201" height="166" class="additional__img">
                <h3 class="additional__title">Жалюзи</h3>
                <p class="text additional__text">
                    Лучшее решение для оформления оконного <br> пространства&nbsp;&mdash; жалюзи. <br> Смотрится красиво&nbsp;и&nbsp;современно.
                </p>
            </div>
        </div>
    </section>
    @include('common.gui.survey')
    @include('common.gui.footer')
@endsection
