@extends('common.layout')
    @section('content')
        @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'Наши работы',
            'intro' =>  'Разместить описание раздела',
            'title' =>  "Фото работ компании Твой стиль {$city->name_formatted}"
        ])
        <section class="portfolio container b-texture">
            <div class="switcher portfolio__switcher">
                <a href="{{ route('photos', $city) }}" class="switcher__button {{ $currentType == null ? 'switcher__button_active':'' }}">Все работы</a>
                
                @foreach ($types as $type)
                    <a href="{{ route('photos', ['city' => $city, 'type' => $type]) }} " class="switcher__button {{ $type->id == ($currentType->id ?? null) ? 'switcher__button_active':'' }}">{{ $type->name }}</a>        
                @endforeach
            </div>
            <div class="portfolio__list" id="portfolio__list" data-photos="{{ $photos }}">
                @foreach($photos as $photo)
                    <a class="case b-card portfolio__item">
                        <p class="case__totals">{{ $photo->price }}  ₽ / {{ $photo->area }} м<sup>2</sup></p>
                        <img src="{{ Voyager::image( $photo->thumbnail('preview','src') ) }}" alt="Фотопечать" class="case__img">
                        <p class="card-title case__title">{{ $photo->name }}</p>
                    </a>
                @endforeach
            </div>
        </section>
        
        @include('common.gui.footer')
    @endsection