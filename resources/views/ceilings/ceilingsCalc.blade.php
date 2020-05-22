@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="ceilingsCalc">
        @include('common.gui.titles', [
            'overtitle' =>  'Калькулятор',
            'title' =>  "Расчет стоимости натяжных потолков {$city->name_formatted}"
        ])
        <div id="ceilings-calc"></div>
    </section>
    @include('common.gui.footer')
@endsection
