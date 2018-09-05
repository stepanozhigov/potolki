@extends('common.layout')

@section('content')
    @include('common.header')

    <section class="main-offer">
        <div class="main-offer__inner container">
            <p class="overtitle main-offer__overtitle">Уникальное предложение</p>
            <p class="title main-offer__title">Пластиковые окна со&nbspскидкой&nbsp30%</p>
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
        <h1 class="title catalog-cards__title">Светопрозрачные конструкции в Сочи от производителя</h1>
        <p class="subtitle catalog-cards__subtitle">Фабрика окон №1 в Краснодаре. Посмотрите каталог и ниже рассчитайте Ваш заказ за 5 секунд.</p>

        <div class="catalog-cards__item card">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg" alt="" class="card__img">
            <p class="card__title">Окна</p>
            <hr class="card__line">
            <p class="card__subtitle">Просчитайте стоимость пластиковых окон. Обеспечьте себе...Смотреть далее</p>
            <p class="card__price">от 5 000 Р</p>
        </div>
        <div class="catalog-cards__item card">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg" alt="" class="card__img">
            <p class="card__title">Окна</p>
            <p class="card__price">от 5 000 Р</p>
        </div>
        <div class="catalog-cards__item card">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg" alt="" class="card__img">
            <p class="card__title">Окна</p>
            <p class="card__price">от 5 000 Р</p>
        </div>
        <div class="catalog-cards__item card">
            <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueItem/catalogue-windows-1.jpg" alt="" class="card__img">
            <p class="card__title">Окна</p>
            <p class="card__price">от 5 000 Р</p>
        </div>
    </section>

    
@endsection