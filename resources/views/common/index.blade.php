@extends('common.layout')

@section('content')
    @include('common.header_light')

    <section class="main-offer main-offer_center">
        <h1 class="title main-offer__title main-offer__title_center">Фабрика пластиковых окон «Твой&#160;стиль»</h1>
        <p class="main-offer__subtitle subtitle">Выберите город, чтобы перейти на сайт</p>
        <a href="/" class="button button_red main-offer__button  ">Выбрать Сочи</a>
        <a href="/" class="button button_gray main-offer__button  ">Выбрать другой город</a>
    </section>

    <section class="cities">
        <h2 class="second-title cities__title">Филиалы в других городах</h2>

        @foreach($cities as $city)
            <a href="{{ route('windows.main', ['city' => $city->code]) }}" class="button cities__item">{{ $city->name }}</a>
        @endforeach

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
    @include('common.footer', ['class' => 'footer_light'])
@endsection
