@extends('common.layout')
    @section('content')
        @include('common.gui.header')


        <section class="promos container">
            @include('common.gui.titles', [
                'overtitle' =>  'Специальные предложения',
                'title' =>  "Акции и скидки на пластиковые окна {$city->name_formatted}",
                'intro' =>  "Ознакомьтесь с&nbsp;нашими специальными предложениями и&nbsp;ниже вызовите замерного мастера для точного замера и&nbsp;расчёта. Для вашего удобства действует бесплатная услуга &laquo;Договор на&nbsp;дому&raquo;"
            ])
            <div class="promos__content">
                @foreach($promos as $promo)
                    <a class="promo b-card promos__item">
                        <img src="{{ Storage::url($promo->image) }}" alt="Фотопечать" class="promo__img">
                        <div class="promo__inner">
                            <p class="card-title promo__title">{!! $promo->title !!}</p>
                            <hr class="line promo__line">
                            <p class="text promo__text">{!! $promo->intro !!}</p>
                            <p class="text promo__text"><span class="text_bold">Условия акции:</span> {!! $promo->conditions !!}</p>
                            <p class="text promo__text"><span class="text_bold">Дополнительно:</span> {!! $promo->additional !!}</p>
                        </div>
                    </a>
                @endforeach
            </div>

        </section>

        @include('common.gui.footer')


    @endsection
