@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="catalogueDetail">
        @include('common.gui.titles', [
            'overtitle' =>  'Цена и фото',
            'class' =>  'container',
            'title' =>  str_replace('#city_title#', $city->name_formatted, $type->ceiling_title),
            'intro' =>  $type->ceiling_intro
        ])

        <div class="catalogueDetail__main">
            <div id="catalogue-slider">
                <catalogue-slider :photos="{{ $photos }}"></catalogue-slider>
            </div>
            <h2 class="catalogueDetail__title">Цена на потолок</h2>
            <p class="catalogueDetail__price">Полотно — от {{ $type->price }} ₽/м2</p>
            <p class="catalogueDetail__install">С установкой — от {{ $type->price_install }} ₽/м2</p>
            <div class="catalogueDetail__buttons">
                <button class="button buttons__item js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button> 
                <a href="{{ route('ceilingsCalc', $city) }}" class="button  button_gray">Рассчитать стоимость</a>
            </div>
        </div>
        </div>
        <div class="catalogueDetail__desc">
            <div class="catalogueDetail__desc-content">
                {!! $type->ceiling_desc !!}
            </div>
            <a class="catalogueDetail__desc-more" href="javascript:void(0);">Читать далее</a>
        </div>
        <div class="catalogueDetail__filter">
            <h2>Другие материалы для натяжных потолков</h2>
            <div class="catalogueDetail__types">
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Двухуровневые</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Парящие</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Звездное небо</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Матовые</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Сатиновые</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Тканевые</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Разные</a>
            </div>
        </div>
    </section>
    @include('common.gui.footer')
@endsection
