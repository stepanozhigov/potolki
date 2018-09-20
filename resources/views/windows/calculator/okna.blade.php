@extends('common.layout')
@section('content')
    @include('common.gui.header')

    <section class="calculator container">
        @include('common.gui.titles', [
            'overtitle' =>  'Калькулятор стоимости',
            'title' =>  "Заказать пластиковые окна {$city->name_formatted}",
            'intro' =>  "Нужно описать процесс рассчета и т.д."
        ])
        <div id="window-calc">
            <window-calc :types="{{ $params }}"></window-calc>
        </div>
    </section> 

    

    @include('common.gui.footer')
@endsection