@extends('common.layout')

    @section('content')
        
        @include('common.header')

        <section class="promos container">
            <p class="overtitle promos__overtitle">Специальные предложения</p>
            <h1 class="title promos__title">Акции на светопрозрачные конструкции {{ $city->name_formatted }}</h1>
            <p class="intro">Сотрудничайте с нами и Вас ждут выгодные акции на все конструкции от компании «Твой стиль». У нас Вы получите индивидуальную скидку при общении с персональным менеджером.</p>
        </section>
    @endsection