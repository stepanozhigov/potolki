@extends('common.layout')
    @section('content')
        @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'ОБРАТНАЯ СВЯЗЬ',
            'title' =>  "Отзывы о компании \"Твой стиль\" {{ $city->name_formatted }}",
            'intro' =>  "Сюда нужно добавить какой-нибудь текст про страницу. А так же о том, что пользователь может оставить отзыв и получить что-нибудь хорошее (например средство за уходом, скидку или другой подарок)."
        ])
        <section class="reviews container b-texture">
            @foreach ($reviews as $review)
                @include('common.gui.review', ['review' => $review])
            @endforeach
            
            <!--<div class="paginator reviews__paginator">
                <a href="" class="paginator__item paginator__item_active">1</a>
                <a href="" class="paginator__item">2</a>
                <a href="" class="paginator__item">3</a>
            </div>-->
            <div class="buttons">
                <a href="{{ route('add-review', $city) }}" class="button reviews__add">Оставить отзыв</a>
            </div>
            
        </section>
        @include('common.gui.footer')
        <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script>
    @endsection