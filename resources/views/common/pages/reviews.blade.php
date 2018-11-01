@extends('common.layout')
    @section('content')
        @include('common.gui.header')
        <section class="reviews container">
            <p class="overtitle reviews__overtitle">ОБРАТНАЯ СВЯЗЬ</p>
            <h1 class="title reviews__title">Отзывы о компании "Твой стиль" {{ $city->name_formatted }}</h1>
            <p class="intro reviews__intro">
                Сюда нужно добавить какой-нибудь текст про страницу. А так же о том, что пользователь может <a class="link" href="{{ route('add-review', $city) }}">оставить отзыв</a>
                и получить что-нибудь хорошее (например средство за уходом, скидку или другой подарок).
            </p>
            @foreach ($reviews as $review)
                @include('common.gui.review', $review)    
            @endforeach

            @include('common.gui.review-popup')
            <div class="paginator reviews__paginator">
                <a href="" class="paginator__item paginator__item_active">1</a>
                <a href="" class="paginator__item">2</a>
                <a href="" class="paginator__item">3</a>
            </div>
        </section>
        @include('common.gui.footer')
    @endsection