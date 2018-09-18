@extends('common.layout')

    @section('content')
        
        @include('common.header')

        <section class="promos container">
            @include('common.gui.titles', [
                'overtitle' =>  'Специальные предложения',
                'title' =>  "Акции на светопрозрачные конструкции {$city->name_formatted}",
                'intro' =>  "Сотрудничайте с нами и Вас ждут выгодные акции на все конструкции от компании «Твой стиль». У нас Вы получите индивидуальную скидку при общении с персональным менеджером."
            ])
            
            @foreach($promos as $promo)
                <a class="promo promos__item">
                    <img src="{{ Storage::url($promo->image) }}" alt="Фотопечать" class="promo__img">
                    <p class="promo__title">{{ $promo->title }}</p>
                    <hr class="promo__line">
                    <p class="promo__text">{{ $promo->intro }}</p>
                    <p class="promo__text">{{ $promo->conditions }}</p>
                    <p class="promo__text">{{ $promo->additional }}</p>
                </a>
            @endforeach
        </section>

        @include('common.footer')


    @endsection