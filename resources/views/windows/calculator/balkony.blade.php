@extends('common.layout')
@section('content')
    @include('common.gui.header')


    <section class="calculator calculator_balcony">
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'Калькулятор стоимости',
            'title' =>  "Заказать пластиковые окна {$city->name_formatted}",
            'intro' =>  "Нужно описать процесс рассчета и т.д."
        ])
        <div id="balcony-calc">
            <balcony-calc :types="{{ $params }}"></balcony-calc>
        </div>
    </section>

    @include('common.gui.footer')
@endsection
