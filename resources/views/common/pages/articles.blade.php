@extends('common.layout')
@section('content')
    @include('common.gui.header')

    <div class="articles container" id="articles">
            @include('common.gui.titles', [
                'overtitle' =>  'Статьи и новости',
                'title' =>  "Полезная информация о&nbsp;пластиковых окнах",
                'intro' =>  "Больше полезной информации, конкурсы и&nbsp;розыгрыши вы&nbsp;можете найти в&nbsp;наших социальных сетях:"
            ])
            <div class="socials titles__socials container">
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_inst"></div>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_fb"></div>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_vk"></div>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_ok"></div>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_youtube"></div>
                </a>
            </div>
            <posts :posts="{{ $articles }}"></posts>
    </div>

    @include('common.gui.footer')
@endsection
