@extends('common.layout')
@section('content')
    @include('common.header')
    <section class="add-review">
        <p class="overtitle add-review__overtitle">Обратная связь</p>
        <h1 class="title add-review__title">Оставить отзыв</h1>
        <p class="intro add-review__intro">Текст про бонусы, которые получит пользователь, если отставит отзыв о нашей компании</p>
    </section>
    @include('common.footer')
@endsection