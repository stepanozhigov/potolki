@extends('common.layout')

@section('content')
    @include('common.gui.header_light')

    <section class="index-offer">
        <h1 class="title index-offer__title">Фабрика пластиковых окон «Твой&#160;стиль»</h1>
        <p class="intro index-offer__intro">Выберите город, чтобы перейти на сайт</p>
        <div class="index-offer__buttons">
            <a href="/" class="button index-offer__button">Выбрать Сочи</a>
            <a href="/" class="button button_gray index-offer__button">Выбрать другой город</a>
        </div>        
    </section>

    <section class="cities">
        @include('common.gui.titles', [
            'secondTitle'  =>  'Филиалы в других городах'
        ])
        @foreach($cities as $city)
            <a href="{{ route('windows.main', ['city' => $city->code]) }}" class="button button_inline cities__item">{{ $city->name }}</a>
        @endforeach
        <p class="intro cities__intro">Нет вашего города? Воспользуйтесь поиском</p>
        <div id="city-search" class="cities__search">
            <city-search :cities="{{ $cities }}"></city-search>
        </div>
                
    </section>

    <section class="directions container b-texture">
        @include('common.gui.titles', [
            'secondTitle'  =>  'Другие направления компании'
        ])
        @foreach($directions as $direction)
            <a href="{{ $direction->site }}" class="direction b-card is-hoverable directions__item">
                <img class="direction__img" src="{{ Storage::url($direction->image) }}" alt="{{ $direction->name }}" >
                <p class="card-title direction__title">{{ $direction->name }}</p>
            </a>
        @endforeach
    </section>
    @include('common.gui.footer_light') 
@endsection
