@extends('common.layout')
@section('content')
    @include('common.gui.header')


    <section class="calculator">
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'Калькулятор стоимости',
            'title' =>  "Рассчитайте пластиковые окна {$city->name_formatted}",
            'intro' =>  "Выберите тип конструкции изделия. Далее введите свою ширину и высоту рамы. После расчёта нажмите кнопку «вызвать замерщика» бесплатно. Точно рассчитать и заключить договор он может у вас дома."
        ])
        <div id="window-calc">
            <window-calc :types="{{ $params }}"></window-calc>
        </div>
    </section>

    @include('common.gui.footer')
@endsection
