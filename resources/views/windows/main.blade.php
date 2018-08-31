@extends('common.layout')

@section('content')
    @include('common.header')

    <section class="main-offer">
        <h1 class="title main-offer__title">Фабрика пластиковых окон «Твой&nbspстиль»</h1>
        <p class="main-offer__subtitle subtitle">Выберите город, чтобы перейти на сайт</p>
        <a href="/" class="button button_red main-offer__button  ">Выбрать Сочи</a>
        <a href="/" class="button button_gray main-offer__button  ">Выбрать другой город</a>
    </section>

    
@endsection