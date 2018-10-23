@extends('common.layout')

@section('content')
    @include('common.gui.header')

    <section class="main-offer">
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

            <form class="form main-offer__form" action="" id="offer-form">
                <input class="input form__input" type="text"  placeholder="Ваше имя">
                <input class="input form__input" type="tel"  placeholder="Ваш телефон">

                <button class="button form__button">Вызвать замерщика</button>

                <p class="form__agreement subtext subtext_white">Оставляя контактную информацию, Вы соглашаетесь на обработку персональных данных</p>
            </form>
        </div>
    </section>

    <section class="catalog-cards container">
        @include('common.gui.titles', [
            'overtitle' =>  'Каталог',
            'title' =>  "Светопрозрачные конструкции {$city->name_formatted} от&nbspпроизводителя",
            'intro' =>  "Фабрика окон №1 {$city->name_formatted}. Посмотрите каталог и ниже рассчитайте Ваш заказ за 5 секунд."
        ])
        
        @foreach ($catalogTypes as $type)
            <a href="" class=" catalog-cards__item b-card is-hoverable">
                <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="card__img">
                <p class="card-title card__title">{{ $type->name }}</p>
                <hr class="line line_bold">
                @if($type->price)
                    <p class="card__price">от <span class="card__number">{{ number_format($type->price, 0, ',', ' ') }} Р</span></p>
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
            <a href="" class="button calc-promo__button">Рассчитать</a>
        </div>

    </section>

    <section class="portfolio-list b-texture">
        @include('common.gui.titles', ['secondTitle' => 'Наши работы'])
        <div class="portfolio-list__list">
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
        </div>
    </section>

    <section class="reviews container b-texture">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])

        @foreach($reviews as $review)
            @include('common.gui.review', $review)
        @endforeach

        <div class="reviews__buttons">
            <a href="{{ route('reviews', $city) }}" class="button button_gray">Прочитать все отзывы</a>
            <a href="{{ route('add-review', $city) }}" class="button">Оставить отзыв</a>
        </div>
    </section>
    @include('common.gui.footer')
@endsection
