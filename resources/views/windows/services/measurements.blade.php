@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container',
        'overtitle' =>  'Совершенно бесплатно',
        'title' =>  'Вызвать замерного мастера'
    ])

    <section class="service">
        <div class="service__texture">
            <div class="service__heading container">
                <div class="service__left">
                    <p class="intro service__intro">
                        Профессиональный мастер не только грамотно замерит помещение, но и учтет все нюансы, пожелания заказчика и архитектуру самого здания.
                        Таким образом Вы получите конструкцию, которая идеально подойдет именно для Вашего помещения. 
                    </p>
                    <p class="intro service__intro">
                        Мастера компании «Твой стиль» - это полноценные торговые представители, которые выполнят все необходимые замеры, рассчитают конечную стоимость конструкции, помогут заключить договор и расскажут о скидках и специальных предложениях компании.
                        А для того, чтобы выбрать подходящую конструкцию было еще проще, у каждого мастера с собой есть все образцы профиля и стеклопакетов.
                    </p>
                </div>
                <img class="service__img" src="/img/windows/services/measurement.png" alt="Вызвать замерного мастера">
            </div>            
        </div>
        
    </section>

    @include('common.gui.footer')

@endsection