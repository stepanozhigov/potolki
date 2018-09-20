@extends('common.layout')

@section('content')
    @include('common.header_light')

    <section class="index-offer">
        <h1 class="title index-offer__title">Фабрика пластиковых окон «Твой&#160;стиль»</h1>
        <p class="intro index-offer__intro">Выберите город, чтобы перейти на сайт</p>
        <div class="index-offer__buttons">
            <a href="/" class="button index-offer__button">Выбрать Сочи</a>
            <a href="/" class="button button_gray index-offer__button">Выбрать другой город</a>
        </div>        
    </section>

    <section class="cities">
        <h2 class="second-title cities__title">Филиалы в других городах</h2>
        @foreach($cities as $city)
            <a href="{{ route('windows.main', ['city' => $city->code]) }}" class="button button_inline cities__item">{{ $city->name }}</a>
        @endforeach
        <p class="intro cities__intro">Нет вашего города? Воспользуйтесь поиском</p>
        <div id="city-search" class="cities__search">
            <city-search :cities="{{ $cities }}"></city-search>
        </div>
                
    </section>

    <section class="directions container">
        <h2 class="second-title directions__title">Другие направления компании</h2>

        @foreach($directions as $direction)
            <div class="card directions__item">
                <img class="card__img" src="{{ Storage::url($direction->image) }}" alt="{{ $direction->name }}" >
                <p class="card__title">{{ $direction->name }}</p>
            </div>
        @endforeach
    </section>
    @include('common.gui.footer_light') 
@endsection
