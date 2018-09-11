@extends('common.layout')

    @section('content')
        
        @include('common.header')

        <section class="promos container">
            <p class="overtitle promos__overtitle">Специальные предложения</p>
            <h1 class="title promos__title">Акции на светопрозрачные конструкции {{ $city->name_formatted }}</h1>
            <p class="intro">Сотрудничайте с нами и Вас ждут выгодные акции на все конструкции от компании «Твой стиль». У нас Вы получите индивидуальную скидку при общении с персональным менеджером.</p>
        </section>

        @foreach($promos as $promo)
            <a class="promo">
                <img src="{{ $promo->img }}" alt="Фотопечать" class="promo__img">
                <p class="promo__title">{{ $promo->title }}</p>
                <hr class="promo__line">
                <p class="promo__text">{{ $promo->intro }}</p>
                <p class="promo__text">{{ $promo->conditions }}</p>
                <p class="promo__text">{{ $promo->additional }}</p>
            </a>
        @endforeach

    @endsection