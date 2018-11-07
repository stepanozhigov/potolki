@extends('common.layout')
    @section('content')
        @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'Ключевые услуги',
            'title' =>  "Пластиковые окна {$city->name_formatted} — от установки до ремонта",
            'intro' =>  "Компания «Твой стиль» - это большая дилерская сеть в 8-ми городах России, которая более чем за 10 лет работы зарекомендовала себя на рынке,
            как одна из лучших компаний по производству и монтажу конструкций из алюминия и ПВХ.
            Мы предлагаем вам надежные системы для окон и балконов, двери различных форм и конфигураций, перегородки для жилых и офисных помещений, а также жалюзи.
            Мы делаем вашу жизнь комфортнее, используя только самые современные материалы и технологии производства. Компания «Твой стиль» - доверяй профессионалам!"
        ])

        <section class="services container b-texture">
            <div class="services__list">
                @foreach ($services as $service)
                    <a href="{{ route('services', ['city' => $city, 'type' =>  $service->code]) }}" class="service-card b-card services__card is-hoverable">
                        <img src="{{ Storage::url($service->img) }}" alt="" class="service-card__img">
                        <p class="card-title service-card__title">{{ $service->name }}</p>
                    </a>
                @endforeach
            </div>
        </section>

        @include('common.gui.footer')
    @endsection