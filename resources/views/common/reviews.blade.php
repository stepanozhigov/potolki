@extends('common.layout')
    @section('content')
        @include('common.header')
        <section class="reviews container">
            <p class="overtitle reviews__overtitle">ОБРАТНАЯ СВЯЗЬ</p>
            <h1 class="title reviews__title">Отзывы о компании "Твой стиль" {{ $city->name_formatted }}</h1>
            <p class="intro reviews__intro">
                Сюда нужно добавить какой-нибудь текст про страницу. А так же о том, что пользователь может <a class="link" href="{{ route('add-review', $city) }}">оставить отзыв</a>
                и получить что-нибудь хорошее (например средство за уходом, скидку или другой подарок).
            </p>
            @include('common.review-card')
            @include('common.review-card')
            @include('common.review-card')
            @include('common.review-card')
            @include('common.review-card')
            @include('common.review-card')
        </section>
        @include('common.footer')
    @endsection