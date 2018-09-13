@extends('common.layout')

@section('content')
    @include('common.header')
    <section class="page__review">
        <div class="container">
            <p class="overtitle">Оставить отзыв</p>
            <h1 class="title">Оставить отзыв о компании Твой Стиль</h1>
        </div>
        @include('common.add-review')
    </section>
    @include('common.footer')
@endsection
