@extends('common.layout')
    @section('content')
        @include('common.gui.header')

        <section class="portfolio container">

            @include('common.gui.titles', [
                'overtitle' =>  'Наши работы',
                'title' =>  "Фото работ компании Твой стиль {$city->name_formatted}"
            ])  
                      
            <div class="switcher portfolio__switcher">
                <a href="{{ route('photos', $city) }}" class="switcher__button {{ $currentType == null ? 'switcher__button_active':'' }}">Все работы</a>
                
                @foreach ($types as $type)
                    <a href="{{ route('photos', ['city' => $city, 'type' => $type]) }} " class="switcher__button {{ $type->id == ($currentType->id ?? null) ? 'switcher__button_active':'' }}">{{ $type->name }}</a>        
                @endforeach
            </div>

            @foreach($photos as $photo)
                <a class="card portfolio__item">
                    <p class="card__plate">{{ $photo->price }}  ₽ / {{ $photo->area }} м2</p>
                    <img src="{{ Voyager::image( $photo->thumbnail('preview','src') ) }}" alt="Фотопечать" class="card__img">
                    <p class="card__title">{{ $photo->name }}</p>
                </a>
            @endforeach
            
        </section>
        
        @include('common.gui.footer')
    @endsection