@extends('common.layout')

@section('content')
    @include('common.header_light')

    <section class="main-offer main-offer_center">
        <h1 class="title title_center main-offer__title">Фабрика пластиковых окон «Твой&nbspстиль»</h1>
        <p class="main-offer__subtitle subtitle">Выберите город, чтобы перейти на сайт</p>
        <a href="/" class="button button_red main-offer__button  ">Выбрать Сочи</a>
        <a href="/" class="button button_gray main-offer__button  ">Выбрать другой город</a>
    </section>

    <section class="cities">
        <h2 class="second-title cities__title">Филиалы в других городах</h2>
        <a href="/" class="button cities__item">Сочи</a>
        <a href="/" class="button cities__item">Сочи</a>
        <a href="/" class="button cities__item">Сочи</a>
        <a href="/" class="button cities__item">Сочи</a>
        <a href="/" class="button cities__item">Сочи</a>
    </section>

    <section class="directions">
        <h2 class="second-title">Другие направления компании</h2>
    </section>
@endsection