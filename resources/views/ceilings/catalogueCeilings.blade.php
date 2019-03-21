@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    	<section class="catalogueCeilings">
            @include('common.gui.titles', [
                'overtitle' =>  'материалы и технологии',
                'class' =>  'container catalogueCeilings__titles',
                'title' =>  "Каталог натяжных потолков {$city->name_formatted}",
                'intro' =>  "Натяжные потолки различаются между собой текстурой исполнения и&nbsp;технологиями установки. В&nbsp;наших каталогах представлены самые популярные виды натяжного полотна, комбинируя которые можно добиться различных эффектов в&nbsp;интерьере."
            ])

            <section class="catalog-cards catalog-cards_materials container ">
                @include('common.gui.titles', [
                    'secondTitle' =>  "Материалы натяжных потолков"
                ])
                <div class="catalog-cards__content">
                    @foreach ($catalogTypes as $type)
                        <? if ($type->id == 5) continue ?>
                        <a href="{{ route('catalogue', ['city' => $city]) }}" class=" catalog-cards__item catalog-cards__item_full b-card is-hoverable">
                            <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
                            <div class="catalog-cards__item-info">
                                <h3 class="card-title catalog-cards__title">{{ $type->name }}</h3>
                                <p class="catalog-cards__desc">Имеют слегка шероховатую поверхность и&nbsp;внешне напоминают классический беленый потолок.</p>
                                @if($type->price)
                                    <p class="catalog-cards__price">от <span class="catalog-cards__number">{{ number_format($type->price, 0, ',', ' ') }} ₽/м2</span></p>
                                @endif
                				<button class="catalog-cards__open" type="button" name="button">
                					<img width="18" height="10" src="/img/arrow-down.svg" alt="arrow">
                				</button>
                            </div>

                        </a>
                    @endforeach
                </div>

            </section>
            <section class="catalog-cards catalog-cards_tech container ">
                @include('common.gui.titles', [
                    'secondTitle' =>  "Технологии натяжных потолков"
                ])
                <div class="catalog-cards__content">
                    @foreach ($catalogTypes as $type)
                        <? if ($type->id == 5) continue ?>
                        <a href="{{ route('catalogue', ['city' => $city]) }}" class=" catalog-cards__item catalog-cards__item_full b-card is-hoverable">
                            <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
                            <div class="catalog-cards__item-info">
                                <h3 class="card-title catalog-cards__title">{{ $type->name }}</h3>
                                <p class="catalog-cards__desc">Имеют слегка шероховатую поверхность и&nbsp;внешне напоминают классический беленый потолок.</p>
                                @if($type->price)
                                    <p class="catalog-cards__price">от <span class="catalog-cards__number">{{ number_format($type->price, 0, ',', ' ') }} ₽/м2</span></p>
                                @endif
                				<button class="catalog-cards__open" type="button" name="button">
                					<img width="18" height="10" src="/img/arrow-down.svg" alt="arrow">
                				</button>
                            </div>

                        </a>
                    @endforeach
                </div>

            </section>
            <section class="catalogueCeilings__rooms photobank">
                <h2 class="catalogueCeilings__rooms-title">Натяжные потолки в&nbsp;различных помещениях</h2>
                <p class="catalogueCeilings__rooms-desc">Натяжные потолки&nbsp;&mdash; это универсальный способ отделки, который подойдет для любого помещения, тем более, что установка такого потолка не&nbsp;требует предварительного выравнивания поверхности. Полотно прекрасно выдерживает перепады температур, не&nbsp;теряет своих внешних качеств со&nbsp;временем и&nbsp;не&nbsp;требует специального ухода. Натяжные потолки прекрасно смотрятся&nbsp;в:</p>
                <div class="photobank__wrap">
                    <div class="photobank__list photobank__list_rooms">
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <div class="categoryLink__image-wrap">
                                <img src="/img/ceilings/kitchenSeaworld.png" alt="" class="categoryLink__image">
                            </div>
                            <p class="categoryLink__name">Прихожая</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <div class="categoryLink__image-wrap">
                                <img src="/img/ceilings/kitchenAbstraction.png" alt="" class="categoryLink__image">
                            </div>
                            <p class="categoryLink__name">Зал</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <div class="categoryLink__image-wrap">
                                <img src="/img/ceilings/kitchenCity.png" alt="" class="categoryLink__image">
                            </div>
                            <p class="categoryLink__name">Спальня</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <div class="categoryLink__image-wrap">
                                <img src="/img/ceilings/kitchenFlowers.png" alt="" class="categoryLink__image">
                            </div>
                            <p class="categoryLink__name">Кухня</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <div class="categoryLink__image-wrap">
                                <img src="/img/ceilings/kitchenFood.png" alt="" class="categoryLink__image">
                            </div>
                            <p class="categoryLink__name">Гостиная</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <div class="categoryLink__image-wrap">
                                <img src="/img/ceilings/kitchenSky.png" alt="" class="categoryLink__image">
                            </div>
                            <p class="categoryLink__name">Ванная</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <div class="categoryLink__image-wrap">
                                <img src="/img/ceilings/kitchenTexture.png" alt="" class="categoryLink__image">
                            </div>
                            <p class="categoryLink__name">Детская</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <div class="categoryLink__image-wrap">
                                <img src="/img/ceilings/kitchenNatural.png" alt="" class="categoryLink__image">
                            </div>
                            <p class="categoryLink__name">Мансарда</p>
                        </a>
                    </div>
                </div>
            </section>

            <section class="">

            </section>
            <section class="seo-block" @if($seoData->background_image) style="background-image: url({{ Storage::url($seoData->background_image) }})" @endif>
                <div class="seo-block__content container">
                    <div class="seo-block__list">
                        <div class="seo-block__item">
                            <h3 class="seo-block__item-title">{!! str_replace('#city_title#', $city->name_formatted, $seoData->first_title) !!}</h3>
                            {!! $seoData->first_text !!}
                            @if ($seoData->firm_img)
                                <img src="{{ Storage::url($seoData->firm_img) }}" alt="" class="seo-block__img">
                            @endif
                        </div>
                        <div class="seo-block__item seo-block__item_reverse">
                            <h3 class="seo-block__item-title">{{ $seoData->second_title }}</h3>
                            {!! $seoData->second_text !!}
                            @if ($seoData->second_img)
                                <img src="{{ Storage::url($seoData->second_img) }}" alt="" class="seo-block__img">
                            @endif
                        </div>
                        <div class="seo-block__item">
                            <h3 class="seo-block__item-title">{{ $seoData->third_title }}</h3>
                            {!! $seoData->third_text !!}
                            @if ($seoData->third_img)
                                <img src="{{ Storage::url($seoData->third_img) }}" alt="" class="seo-block__img">
                            @endif
                        </div>
                    </div>
                </div>
            </section>
    	</section>
    @include('common.gui.footer')
@endsection
