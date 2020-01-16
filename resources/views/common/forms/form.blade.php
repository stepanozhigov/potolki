@extends('common.layout')
@section('content')
    @include('common.gui.header')
    <section class="formPage">
        @include('common.gui.titles', [
            'title' =>  "Заказать звонок",
            'intro' =>  "Оставьте ваши данные и&nbsp;специалист свяжется с&nbsp;вами для уточнения даты и&nbsp;времени <span>в&nbsp;течении 5&nbsp;минут</span>"
        ])
        <form class="form js-less formPage__form" method="post" action="{{ route('forms.feedback', $city) }}">
            @csrf
            <input type="hidden" name="city" value="{{ $city->bx_code ?? '' }}">
            <input type="hidden" name="city_name" value="{{ $city->name ?? ''}}">
            <input class="input form__input form__input_horiz" type="text" name="name" required placeholder="Ваше имя">
            <input class="input form__input form__input_horiz" type="tel" name="phone" required placeholder="Ваш телефон">
            <button class="button form__button">Заказать</button>
            <p class="subtext subtext_center form__agreement">Оставляя контактную информацию, вы соглашаетесь на <a href="{{ route('agreement', $city) }}">обработку персональных данных</a> </p>
        </form>
        <div class="formPage__additional">
            <div class="socials">
                 @foreach($city->socials as $social)
                    @if ($social->direction_id == 1)
                        <a target="_blank" href="{{ $social->link }}" class="socials__item">
                            <div class="socials__icon socials__icon_{{ $social->icon }}"></div>
                        </a>
                    @endif
                @endforeach

            </div>
            @include('common.gui.survey')
        </div>
    </section>
    @include('common.gui.footer')
@endsection
