@extends('common.layout')
@section('content')
    @include('common.gui.header')

    <div class="articles container" id="articles">
            @include('common.gui.titles', [
                'overtitle' =>  'Статьи и новости',
                'title' =>  "Полезная информация о пластиковых окнах",
                'intro' =>  "Больше полезной информации, конкурсы и&nbsp;розыгрыши <br> вы&nbsp;можете найти в&nbsp;наших социальных сетях:"
            ])
            <div class="socials articles__socials">
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_vk"></div>
                    <span class="socials__name text red-hoverable">Вконтакте</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_youtube"></div>
                    <span class="socials__name text red-hoverable">Одноклассники</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_fb"></div>
                    <span class="socials__name text red-hoverable">Facebook</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_inst"></div>
                    <span class="socials__name text red-hoverable">Instagram</span>
                </a>
            </div>
            <posts :posts="{{ $articles }}"></posts>
    </div>

    @include('common.gui.footer')
@endsection
