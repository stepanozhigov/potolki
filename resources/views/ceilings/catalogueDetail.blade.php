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
                <a href="{{ route('forms.measure', $city) }}" class="button buttons__item">Вызвать замерщика</a> 
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
            @if ($type->type == 'rooms')
                <h2>Другие помещения для натяжных потолков</h2>
                <div class="catalogueDetail__types">
                    @foreach(App\CatalogType::where(['direction_id' => 2, 'type' => 'rooms'])->get() as $room)
                        <a href="{{ route('catalogue', ['city' => request()->route()->city, 'type' => $room]) }}" class="tag {{ $room->id == $type->id ? 'tag_active': '' }} catalogueDetail__tag">{{ $room->name }}</a>
                    @endforeach 
                </div>
            @else
                <h2>Другие материалы для натяжных потолков</h2>
                <div class="catalogueDetail__types">
                    @foreach(App\CatalogType::where(['type' => 'material'])->orWhere('type', 'tech')->get() as $material)
                        <a href="{{ route('catalogue', ['city' => request()->route()->city, 'type' => $material]) }}" class="tag {{ $material->id == $type->id ? 'tag_active': '' }} catalogueDetail__tag">{{ $material->name }}</a>
                    @endforeach 
                </div>
            @endif
            
        </div>
    </section>
    @include('common.gui.footer')
@endsection
