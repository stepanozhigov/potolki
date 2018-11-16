@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container',
        'overtitle' =>  'Совершенно бесплатно',
        'title' =>  'Вызвать замерного мастера',
        'intro' =>  'Профессиональный мастер не только грамотно замерит помещение, но и учтет все нюансы, пожелания заказчика и архитектуру самого здания.
                        Таким образом Вы получите конструкцию, которая идеально подойдет именно для Вашего помещения. '
    ])

    <section class="service container">
            <div class="service__heading service__heading_small container">
                <form action="" class="form service__form">
                    <input type="text" placeholder="Ваше имя" class="input form__input">
                    <input type="text" placeholder="Ваш телефон" class="input form__input">
                    <button class="button button_red">Вызвать замерщика</button>
                </form>
                <img class="service__img" src="/img/windows/services/measurement.png" alt="Вызвать замерного мастера">
            </div>        
    </section>

    @include('common.gui.footer', ['skipOffer' => true])

@endsection