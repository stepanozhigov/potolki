@extends('common.layout')
@section('content')
    @include('common.gui.header')

        <div class="titles container">
            <p class="overtitle titles__overtitle">Статьи</p>
            <h1 class="title titles__title">Полезная информация о пластиковых окнах</h1>
            <hr class="line titles__line">
            <p class="intro titles__intro">Больше полезной информации, конкурсы и розыгрыши вы можете найти в наших социальных сетях:</p>
            <div class="socials titles__socials">
                <a href="" class="socials__item red-hoverable">
                    <img class="socials__icon" src="/img/gui/social_gray_vk.svg" alt="">
                    <span class="socials__name text red-hoverable">Вконтакте</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <img class="socials__icon" src="/img/gui/social_gray_ok.svg" alt="">
                    <span class="socials__name text red-hoverable">Одноклассники</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <img class="socials__icon" src="/img/gui/social_gray_fb.svg" alt="">
                    <span class="socials__name text red-hoverable">Facebook</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <img class="socials__icon" src="/img/gui/social_gray_inst.svg" alt="">
                    <span class="socials__name text red-hoverable">Instagram</span>
                </a>
            </div>
        </div>

    <div class="articles container">
        @foreach ($articles as $article)
            <a href="{{ route('article', [$city, $article]) }}" class="article-card b-card articles__item" style="background-image: url({{ Storage::url($article->preview_img) }}); @if($article->width) width: {{ $article->width }}%;  @endif">
                <p class="text article-card__title">{{ $article->title }}</p>
                <p class="text article-card__intro">{{ $article->preview_text }}</p>
                <span class="link subtext article-card__link">Читать далее</span>
            </a>
        @endforeach
        <!--<div class="paginator articles__paginator">
            <a href="" class="paginator__item paginator__item_active">1</a>
            <a href="" class="paginator__item">2</a>
            <a href="" class="paginator__item">3</a>
        </div>-->
    </div>

    @include('common.gui.footer')
@endsection
