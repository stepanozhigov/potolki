@extends('common.layout')

    @section('content')

        @include('common.header')

        <section class="services container">
            <p class="overtitle services__overtitle">Ключевые услуги</p>
            <h1 class="title services__title">Пластиковые окна {{ $city->name_formatted }} — от установки до ремонта</h1>
            <p class="intro services__intro">
                Компания «Твой стиль» - это большая дилерская сеть в 8-ми городах России, которая более чем за 10 лет работы зарекомендовала себя на рынке,
                как одна из лучших компаний по производству и монтажу конструкций из алюминия и ПВХ.
                Мы предлагаем вам надежные системы для окон и балконов, двери различных форм и конфигураций, перегородки для жилых и офисных помещений, а также жалюзи.
                Мы делаем вашу жизнь комфортнее, используя только самые современные материалы и технологии производства. Компания «Твой стиль» - доверяй профессионалам!
            </p>

            <div class="services__list">
                @include('common.card', ['class' => 'services__card', 'img' => 'http://okna-ts.ru/upload/window-services/ustanovka.jpg', 'title' => 'Установка'])
                @include('common.card', ['class' => 'services__card', 'img' => 'http://okna-ts.ru/upload/window-services/ustanovka.jpg', 'title' => 'Установка'])
                @include('common.card', ['class' => 'services__card', 'img' => 'http://okna-ts.ru/upload/window-services/ustanovka.jpg', 'title' => 'Установка'])
                @include('common.card', ['class' => 'services__card', 'img' => 'http://okna-ts.ru/upload/window-services/ustanovka.jpg', 'title' => 'Установка'])
                @include('common.card', ['class' => 'services__card', 'img' => 'http://okna-ts.ru/upload/window-services/ustanovka.jpg', 'title' => 'Установка'])
                @include('common.card', ['class' => 'services__card', 'img' => 'http://okna-ts.ru/upload/window-services/ustanovka.jpg', 'title' => 'Установка'])
                @include('common.card', ['class' => 'services__card', 'img' => 'http://okna-ts.ru/upload/window-services/ustanovka.jpg', 'title' => 'Установка'])
            </div>
        </section>
    @endsection