@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="ceilingsCalc">
        @include('common.gui.titles', [
            'overtitle' =>  'Калькулятор',
            'title' =>  "Расчет стоимости Натяжного потолка {$city->name_formatted}"
        ])
        <div id="ceilings-calc">
            <ceilings-calc ></ceilings-calc>
        </div>
    </section>
    @include('common.gui.footer')
@endsection
