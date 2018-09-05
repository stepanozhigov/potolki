@extends('common.layout')

    @section('content')
        
        @include('common.header')
        
        <section class="portfolio container">
            <p class="overtitle portfolio__overtitle ">Наши работы</p>
            <h1 class="title portfolio__title">Фото работ компании "Твой стиль" {{ $city->name_formatted }}</h1>

            <div class="switcher portfolio__switcher">
                <a href="" class="switcher__button switcher__button_active">Все работы</a>
                <a href="" class="switcher__button">Окна</a>
                <a href="" class="switcher__button">Балконы</a>
                <a href="" class="switcher__button">Двери</a>
                <a href="" class="switcher__button">Перегородки</a>
                <a href="" class="switcher__button">Жалюзи</a>
            </div>

            <a class="card portfolio__item">
                <p class="card__plate">12000  ₽ / 8 м2</p>
                <img src="http://potolki-ts.ru/upload/iblock/72f/72f5b56193a6f64ef030ecc854ccf376.jpg" alt="Фотопечать" class="card__img">
                <p class="card__title">Фотопечать</p>
                <hr class="card__line">
                <p class="card__subtitle">Мансарда</p>
            </a>
            <a class="card portfolio__item">
                <p class="card__plate">12000  ₽ / 8 м2</p>
                <img src="http://potolki-ts.ru/upload/iblock/72f/72f5b56193a6f64ef030ecc854ccf376.jpg" alt="Фотопечать" class="card__img">
                <p class="card__title">Фотопечать</p>
                <p class="card__subtitle">Мансарда</p>
            </a>
            <a class="card portfolio__item">
                <p class="card__plate">12000  ₽ / 8 м2</p>
                <img src="http://potolki-ts.ru/upload/iblock/72f/72f5b56193a6f64ef030ecc854ccf376.jpg" alt="Фотопечать" class="card__img">
                <p class="card__title">Фотопечать</p>
                <p class="card__subtitle">Мансарда</p>
            </a>
            <a class="card portfolio__item">
                <p class="card__plate">12000  ₽ / 8 м2</p>
                <img src="http://potolki-ts.ru/upload/iblock/72f/72f5b56193a6f64ef030ecc854ccf376.jpg" alt="Фотопечать" class="card__img">
                <p class="card__title">Фотопечать</p>
                <p class="card__subtitle">Мансарда</p>
            </a>
        </section>
        
    @endsection