@extends('common.layout')

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

@section('content')
    @include('common.gui.header')
    @include('common.gui.titles', [
        'title' =>  "Контакты фабрики окон \"Твой стиль\" {$city->name_formatted}"
    ])
    <section class="contacts">
        @if(count($city->offices) > 0) 
            <div class="map contacts__map" id="map" data-placemark="/img/gui/logo.png"></div>
            <div class="contacts__offices">
                @foreach ($city->offices as $id => $office)
                    <div class="office {{ $id == 1 ? 'office_active':'' }} contacts__office b-card" data-coords="{{ $office->coords }}">
                        <img src="{{ Storage::url($office->img) }}" alt="" class="office__img">
                        <p class="office__title card-title"><img class="office__icon" src="/img/gui/coord_pin.png" alt=""> {{ $office->adres }}</p>
                        <p class="office__desc text">{{ $office->adres_desc }}</p>
                        <p class="office__time card-title"><img class="office__icon" src="/img/gui/time.png" alt="">{{ $office->time }}</p>
                        <p class="text office__weekend">Без выходных</p>
                    </div>
                @endforeach

                @if(count($city->offices) > 1) 
                    <div class="contacts__nav">
                        <img class="js-next-office contacts__arrow" src="/img/gui/arrow_top.png" alt="">
                        <img class="js-next-office contacts__arrow contacts__arrow_down" src="/img/gui/arrow_top.png" alt="">
                    </div>
                @endif
            </div>
        @endif 

        <div class="contacts__footer container">
            <div class="contacts__item">
                <p class="second-title">Единый номер</p>
                <p class="phone text contacts__phone">
                    <span class="phone__number">
                        <img class="phone__icon" src="/img/gui/phone_rounded.svg" alt="">8 800 333-97-14
                    </span>
                    <span class="phone__time">круглосуточно | бесплатно</span>
                </p>
            </div>
            <div class="contacts__item">
                <p class="second-title">Почта</p>
                <p class="mail text">
                    <img src="/img/gui/mail_rounded.svg" alt="" class="mail__icon">sochi@mail-ts.ru</p>
            </div>
            <div class="contacts__item">
                <p class="second-title">Социальные сети</p>
                <div class="socials contacts__socials">
                    <a href="" class="socials__item">
                        <img src="/img/gui/social_gray_vk.svg" alt="">
                    </a>
                    <a href="" class="socials__item">
                        <img src="/img/gui/social_gray_ok.svg" alt="">
                    </a>
                    <a href="" class="socials__item">
                        <img src="/img/gui/social_gray_fb.svg" alt="">
                    </a>
                    <a href="" class="socials__item">
                        <img src="/img/gui/social_gray_inst.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
        
    </section>
    @include('common.gui.footer')
@endsection
