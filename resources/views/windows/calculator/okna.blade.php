@extends('common.layout')
@section('content')
    @include('common.header')

    <section class="calculator">
        <p class="overtitle calculator__overtitle">Калькулятор стоимость</p>
        <h1 class="title calculator__title">Заказать пластиковые окна {{ $city->name_formatted }}</h1>
        <p class="intro calculator__intro">Нужно описать процесс рассчета и т.д.</p>
    </section>    
    <div id="app">
        <example-component></example-component>
    </div>
    @include('common.footer')
@endsection