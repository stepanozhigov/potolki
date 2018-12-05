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

                <p class="form__agreement subtext subtext_white">Оставляя контактную информацию, Вы соглашаетесь на обработку персональных данных</p>
            </form>
            <button data-src="#popup_callback" class="button main-offer__button mobile-only js-show">Вызвать замерщика</button>
        </div>
    </section>

    <section class="catalog-cards container">
        @include('common.gui.titles', [
            'overtitle' =>  'Каталог',
            'title' =>  "Пластиковые окна {$city->name_formatted} от&nbspпроизводителя",
            'intro' =>  "Фабрика окон №1 {$city->name_formatted}. Посмотрите каталог и ниже рассчитайте ваш заказ <span class='intro_red'>за&nbsp5&nbspсекунд</span>"
        ])
        
        @foreach ($catalogTypes as $type)
            <? if ($type->id == 5) continue ?>
            <a href="{{ route('calculator', ['city' => $city, 'type' => $type]) }}" class=" catalog-cards__item b-card is-hoverable">
                <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
                <p class="card-title catalog-cards__title">{{ $type->name }}</p>
                <hr class="line line_bold line_small catalog-cards__line">
                @if($type->price)
                    <p class="catalog-cards__price">от <span class="catalog-cards__number">{{ number_format($type->price, 0, ',', ' ') }} ₽</span></p>
                @endif
            </a>
        @endforeach
    </section>

    <section class="manufacturers container">

        @include('common.gui.titles', ['secondTitle' => 'Производители профилей'])

        <div class="manufacturers__list">
            @foreach ($currentDirection->manufacturers as $manufacturer)
                <img src="{{ Storage::url($manufacturer->logo) }}" alt="" class="manufacturers__item">    
            @endforeach
        </div>

    </section>

    <section class="calc-promo container">
        <div class="titles calc-promo__titles">
            <h2 class="second-title titles__second-title">Калькулятор стоимости</h2>   
            <hr class="line titles__line">  
            <p class="intro calc-promo__intro">
                Для вашего удобства мы разработали онлайн калькулятор для предварительного расчета вашей конструкции.
                Кликните на кнопку «Рассчитать» и выберите тип изделия для перехода в нужный раздел.
            </p>
        </div>
        
        <div class="calc-promo__footer">
            <a href="{{ route('calculator', $city) }}" class="button calc-promo__button">Рассчитать</a>
        </div>

    </section>

    <section class="portfolio b-texture">
        @include('common.gui.titles', ['secondTitle' => 'Наши работы'])
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

    <section class="reviews container b-texture">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])
        
        @foreach($reviews as $review)
            @include('common.gui.review', $review)
        @endforeach

        <div class="buttons reviews__buttons">
            <a href="{{ route('reviews', $city) }}" class="button buttons__item button_gray">Прочитать все отзывы</a>
            <a href="{{ route('add-review', $city) }}" class="button">Оставить отзыв</a>
        </div>
    </section>

    <section class="articles container">
        <div class="titles">
            <h2 class="second-title titles__title">Статьи и полезная информация</h2>
            <hr class="line titles__line">
            <p class="intro titles__intro">Больше полезной информации, конкурсы и розыгрыши<br> вы можете найти в наших социальных сетях:</p>
            <div class="socials titles__socials">
                <a href="" class="socials__item red-hoverable">
                    <img class="socials__icon" src="/img/gui/social_gray_vk.svg" alt="">
                    <span class="socials__name text red-hoverable">Вконтакте</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <img class="socials__icon" src="/img/gui/social_gray_ok.svg" alt="">
                    <span class="socials__name text red-hoverable">Одноклассники</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <img class="socials__icon" src="/img/gui/social_gray_fb.svg" alt="">
                    <span class="socials__name text red-hoverable">Facebook</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <img class="socials__icon" src="/img/gui/social_gray_inst.svg" alt="">
                    <span class="socials__name text red-hoverable">Instagram</span>
                </a>
            </div>
        </div>
        <div class="articles__preview">
            @foreach ($articles as $article)
                <a href="{{ route('article', [$city, $article]) }}" class="article-card b-card articles__item" style="background-image: url({{ Storage::url($article->preview_img) }});">
                    <p class="text article-card__title">{{ $article->title }}</p>
                    <p class="text article-card__intro">{{ $article->preview_text }}</p>
                    <span class="link subtext article-card__link">Читать далее</span>
                </a>
            @endforeach
        </div>        
        <div class="buttons articles__buttons">
            <a href="{{ route('articles', $city) }}" class="button button_red">Читать остальные статьи</a>
        </div>
    </section>

    <section class="additional container b-texture">
        @include('common.gui.titles', ['secondTitle' => 'Также вас может заинтересовать'])
        <div class="additional__item b-card">
            <p class="card-title">Жалюзи</p>
            <hr class="line">
            <div class="additional__row">
                <img src="/img/windows/additional__zhaluzi.png" alt="" class="additional__img">
                <p class="text additional__text">
                    Если вы хотите защититься от палящих лучей летнего солнца – лучшего решения, чем купить жалюзи на окна, и не придумать.
                </p>
            </div>
            <a href="{{ route('calculator', ['city' => $city, 'type' => 'zhaluzi']) }}" class="button button_gray additional__button">Перейти в каталог</a>
        </div>
        <div class="additional__item b-card">
            <p class="card-title">Рассрочка до 3х лет</p>
            <hr class="line">
            <div class="additional__row">
                <img src="/img/windows/additional__percent.png" alt="" class="additional__img">
                <p class="text additional__text">
                    Основной плюс рассрочки в отсутствии переплат. Итоговая сумма, прописанная в договоре рассрочки, не меняется с течением времени.
                </p>
            </div>
            <a href="{{ route('services', ['city' => $city, 'type' => 'credit']) }}" class="button button_gray additional__button">Подробнее</a>
        </div>
    </section>

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
