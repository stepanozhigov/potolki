@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="lamps">
        @include('common.gui.titles', [
        'overtitle' =>  'Каталог',
        'title' =>  "Светильники для натяжных потолков $city->name_formatted"
        ])
        <div class="lamps__content">
            @foreach($lamps as $lamp)
                @include('ceilings.lamp', ['lamp' => $lamp])
            @endforeach
        </div>

    </section>


    @include('common.gui.footer')
@endsection
