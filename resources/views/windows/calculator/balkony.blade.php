@extends('common.layout')
@section('content')
    @include('common.gui.header')


    <section class="calculator calculator_balcony">
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'Калькулятор стоимости',
            'title' =>  "Рассчитайте остекление балкона и лоджии {$city->name_formatted}",
            'intro' =>  "Выберите тип конструкции изделия. Далее введите свою ширину и высоту рамы. После расчёта нажмите кнопку «вызвать замерщика» бесплатно. Точно рассчитать и заключить договор он может у вас дома."
        ])
        <div id="balcony-calc">
            <balcony-calc :types="{{ $params }}"></balcony-calc>
        </div>
    </section>

    @include('common.gui.footer')
@endsection
