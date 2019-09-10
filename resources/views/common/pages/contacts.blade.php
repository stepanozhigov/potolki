@extends('common.layout')

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

@section('content')
    @include('common.gui.header')
    <style type="text/css">
        .ymaps-2-1-74-controls__control {
            z-index: 500;
        }
        .contacts__requisites {
            margin-top: 48px !important;
        }
        .requisites {
            display: flex; 
            flex-direction: column;
            align-items: center;
        }
        .requisites__list {
            list-style: none;
        }
        .requisites__item {
            margin-bottom: 12px;
        }
        .requisite__title, .requisite__value {
            font-size: 18px;
        } 

        @media screen and (max-width: 500px)
        {
            .contacts__requisites {
                order: 3;
            }
            .contacts__offices {
                width: 85%;
                left: 41px;
            }
        }
    </style>
    <section class="contacts">
        <div class="titles ">
            <h1 class="title title_borderless titles__title">Контакты фабрики натяжных потолков «Твой стиль» {!! $city->name_formatted !!}</h1>
        </div>
        @if(count($city->offices) > 0)
            <div class="map contacts__map" id="map" data-placemark="/img/gui/logo.png">
                <div class="contacts__offices">
                    @foreach ($city->offices as $id => $office)
                        <div class="office {{ $id == 0 ? 'office_active':'' }} contacts__office b-card" data-coords="{{ $office->coords }}">
                            <img src="{{ Storage::url($office->img) }}" alt="" class="office__img">
                            <div class="office__info">
                                <p class="office__title card-title"> {{ $office->adres }}</p>
                                <p class="office__desc text">{{ $office->adres_desc }}</p>
                                <p class="office__time card-title">{{ $office->time }}</p>
                                <p class="text office__weekend">Без выходных</p>
                            </div>
                        </div>
                    @endforeach

                    @if(count($city->offices) > 1)
                        <div class="contacts__nav">
                            <button type="button" class="js-next-office contacts__arrow contacts__prev" name="button">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
                            </button>
                            <button type="button" class="js-next-office contacts__arrow contacts__next" name="button">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
                            </button>
                        </div>
                    @endif
                </div>
            </div>

        @endif

        <div class="contacts__footer">
            <div class="contacts__footer-content">
                <div class="contacts__item">
                    <p class="second-title">Единый номер</p>
                    <p class="phone text contacts__phone">
                        <a href="tel:{{ $currentDirection->phone }}" class="phone__number">
                            <img class="phone__icon" src="/img/gui/phone_gray.svg" alt="">{{ $currentDirection->phone }}
                        </a>
                        <span class="phone__time">круглосуточно | бесплатно</span>
                    </p>
                </div>
                <div class="contacts__item">
                    <p class="second-title">Почта</p>
                    <p class="mail text">
                        <img src="/img/gui/mail_gray.svg" alt="" class="mail__icon">{{ $city->email }}</p>
                </div>
                <div class="contacts__item">
                    <p class="second-title">Социальные сети</p>
                    <div class="socials contacts__socials">
                         @foreach($city->socials as $social)
                            <a target="_blank" href="{{ $social->link }}" class="socials__item">
                                <div class="socials__icon socials__icon_{{ $social->icon }}"></div>
                            </a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="requisites container contacts__requisites">
            <h3 class="second-title requisites__title">Реквизиты компании</h3>
            <ul class="requisites__list">
                <li class="requisites__item requisite">
                    <span class="text requisite__title">Полное наименование:</span>
                    <span class="text requisite__value">Общество с ограниченной ответственностью «Твой стиль»</span>
                </li>
                <li class="requisites__item requisite">
                    <span class="text requisite__title">ОГРН:</span>
                    <span class="text requisite__value">1152366007287</span>
                </li>
                <li class="requisites__item requisite">
                    <span class="text requisite__title">ИНН:</span>
                    <span class="text requisite__value">2320232540</span>
                </li>
                <li class="requisites__item requisite">
                    <span class="text requisite__title">КПП:</span>
                    <span class="text requisite__value">232001001</span>
                </li>
                <li class="requisites__item requisite">
                    <span class="text requisite__title">Юридический адрес / фактический:</span>
                    <span class="text requisite__value"> 354068, РФ, Краснодарский край, г. Сочи, ул. Донская 28, Литер А-2</span>
                </li>
                <li class="requisites__item requisite">
                    <span class="text requisite__title">Ген. директор:</span>
                    <span class="text requisite__value">Репин Александр Александрович </span>
                </li>
            </ul>
        </div>

    </section>
    @include('common.gui.footer')
@endsection
