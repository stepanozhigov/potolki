@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container',
        'overtitle' =>  'Совершенно бесплатно',
        'title' =>  'Вызвать замерного мастера',
        'intro' =>  'Профессиональный мастер не&nbsp;только грамотно замерит помещение, но&nbsp;и&nbsp;учтет все нюансы, пожелания заказчика и&nbsp;архитектуру самого здания. Таким образом вы&nbsp;получите конструкцию, которая идеально подойдет именно для&nbspвашего помещения.'
    ])

    <section class="service container">
            <div class="service__heading service__heading_small container">
                <form action="" class="form service__form">
                    <input required type="text" placeholder="Ваше имя" class="input form__input">
                    <input required type="tel" placeholder="Ваш телефон" class="input form__input">
                    <button class="button button_red">Вызвать замерщика</button>
                </form>
                <img class="service__img" src="/img/windows/services/measurement.png" alt="Вызвать замерного мастера">
            </div>        
    </section>

    @include('common.gui.footer', ['skipOffer' => true])

@endsection