@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="ceilingsCalc">
        @include('common.gui.titles', [
            'overtitle' =>  'Калькулятор',
            'title' =>  "Расчет стоимости натяжного потолка {$city->name_formatted}"
        ])
        @include('ceilings.calc')
    </section>
    @include('common.gui.footer')
@endsection
