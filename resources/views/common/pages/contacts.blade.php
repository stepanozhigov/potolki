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
        
    </section>
    @include('common.gui.footer')
@endsection
