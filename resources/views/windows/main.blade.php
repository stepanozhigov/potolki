@extends('common.layout')

@section('content')
    @include('common.header')

    <section class="main-offer">
        <div class="main-offer__inner container">
            <p class="overtitle main-offer__overtitle">Уникальное предложение</p>
            <h1 class="title main-offer__title">Пластиковые окна со&nbspскидкой&nbsp30%</h1>
            <p class="main-offer__subtitle subtitle">Для получения скидки оставьте заявку</p>

            <form class="form main-offer__form" action="">
                <input class="input main-offer__input" type="text"  placeholder="Ваше имя">
                <input class="input main-offer__input" type="tel"  placeholder="Ваш телефон">

                <button class="button button_red">Вызвать замерщика</button>

                <p class="form__agreement">Оставляя контактную информацию, Вы соглашаетесь на обработку персональных данных</p>
            </form>
            <img class="main-offer__girl" src="/img/main-offer-girl.png" alt="">
        </div>

    </section>

    <section class="catalog-cards container">

        <p class="overtitle catalog-cards__overtitle">Каталог</p>
        <h1 class="title catalog-cards__title">Светопрозрачные конструкции {{ $city->name_formatted }} от&nbspпроизводителя</h1>
        <p class="subtitle catalog-cards__subtitle">Фабрика окон №1 {{ $city->name_formatted }}. Посмотрите каталог и ниже рассчитайте Ваш заказ за 5 секунд.</p>

        @include('common.card', ['class' => 'catalog-cards__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
        @include('common.card', ['class' => 'catalog-cards__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
        @include('common.card', ['class' => 'catalog-cards__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
        @include('common.card', ['class' => 'catalog-cards__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])

    </section>

    <section class="manufacturers container">

        <h2 class="second-title manufacturers__title">Производители профилей</h2>
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

        <h2 class="second-title calc-promo__title">Калькулятор стоимости</h2>
        <p class="intro calc-promo__intro">
            Для вашего удобства мы разработали онлайн калькулятор для предварительного расчета вашей конструкции.
            Кликните на кнопку «Рассчитать» и выберите тип изделия для перехода в нужный раздел.
        </p>
        <div class="calc-promo__footer">
            <a href="" class="button button_inline button_red calc-promo__button">Рассчитать</a>
        </div>

    </section>

    <section class="portfolio">
        <h2 class="second-title portfolio__title">Наши работы</h2>
        <div class="portfolio__list">
                @include('common.card', ['class' => 'portfolio__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.card', ['class' => 'portfolio__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.card', ['class' => 'portfolio__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.card', ['class' => 'portfolio__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])
                @include('common.card', ['class' => 'portfolio__item', 'img' => 'http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg', 'title' => 'Окна', 'price' => '500'])

        </div>
    </section>

    <section class="reviews container">
        <h2 class="second-title reviews__title">
            Отзывы наших клиентов
        </h2>

        @include('common.review-card')
        @include('common.review-card')
        @include('common.review-card')
    </section>
	@include('common.form-request-open')
    @include('common.footer')
@endsection
