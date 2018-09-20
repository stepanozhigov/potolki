@extends('common.layout')

@section('content')
    @include('common.header')

    <section class="main-offer">
        <div class="main-offer__inner container">
            <p class="overtitle main-offer__overtitle">Уникальное предложение</p>
            <h1 class="title main-offer__title">Пластиковые окна со&nbspскидкой&nbsp30%</h1>
            <p class="main-offer__subtitle subtitle">Для получения скидки оставьте заявку</p>

            <form class="form main-offer__form" action="" id="offer-form">
                <input class="input main-offer__input" type="text"  placeholder="Ваше имя">
                <input class="input main-offer__input" type="tel"  placeholder="Ваш телефон">

                <button class="button">Вызвать замерщика</button>

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
        
        @include('common.gui.card', ['class' => 'catalog-cards__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
        @include('common.gui.card', ['class' => 'catalog-cards__item', 'img' => 'http://okna-ts.ru/upload/okna-min/dveri-min.png', 'title' => 'Двери', 'price' => '500'])
        @include('common.gui.card', ['class' => 'catalog-cards__item', 'img' => 'http://okna-ts.ru/upload/okna-min/balkoni-min.png', 'title' => 'Балконы', 'price' => '500'])
        @include('common.gui.card', ['class' => 'catalog-cards__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-4.jpg', 'title' => 'Перегородки', 'price' => '500'])
    </section>

    <section class="manufacturers container">

        @include('common.gui.titles', ['secondTitle' => 'Производители профилей'])

        <div class="manufacturers__list">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/featuresCard/montblanc.png" alt="" class="manufacturers__item">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/featuresCard/salamander.png" alt="" class="manufacturers__item">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/featuresCard/montblanc.png" alt="" class="manufacturers__item">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/featuresCard/montblanc.png" alt="" class="manufacturers__item">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/featuresCard/montblanc.png" alt="" class="manufacturers__item">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/featuresCard/montblanc.png" alt="" class="manufacturers__item">
        </div>

    </section>

    <section class="calc-promo container">
        @include('common.gui.titles', [
            'secondTitle' => 'Калькулятор стоимости',
            'intro' =>  "Для вашего удобства мы разработали онлайн калькулятор для предварительного расчета вашей конструкции.
            Кликните на кнопку «Рассчитать» и выберите тип изделия для перехода в нужный раздел."
        ])
        
        <div class="calc-promo__footer">
            <a href="" class="button button_inline button_red calc-promo__button">Рассчитать</a>
        </div>

    </section>

    <section class="portfolio-list">
        @include('common.gui.titles', ['secondTitle' => 'Наши работы'])
        <div class="portfolio-list__list">
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.gui.card', ['class' => 'portfolio-list__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
        </div>
    </section>

    <section class="reviews container">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])

        @foreach($reviews as $review)
            @include('common.gui.review', $review)
        @endforeach

        <div class="reviews__buttons">
            <a href="{{ route('reviews', $city) }}" class="button">Прочитать все отзывы</a>
            <a href="{{ route('add-review', $city) }}" class="button">Оставить отзыв</a>
        </div>
    </section>
    @include('common.footer')
@endsection
