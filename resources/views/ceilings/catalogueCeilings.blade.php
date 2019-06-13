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
			<div class="catalogueCeilings__wrap">
				<section class="catalog-cards catalog-cards_materials container ">
	                @include('common.gui.titles', [
	                    'secondTitle' =>  "Материалы натяжных потолков"
	                ])
	                <div class="catalog-cards__content">
	                    @foreach ($catalogTypes as $type)
	                        <? if ($type->id == 5) continue ?>
	                        <a href="{{ route('catalogue', ['city' => $city, 'type' => $type]) }}" class=" catalog-cards__item catalog-cards__item_full b-card is-hoverable">
	                            <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
	                            <div class="catalog-cards__item-info">
	                                <h3 class="card-title catalog-cards__title">{{ $type->name }}</h3>
	                                <p class="catalog-cards__desc">Имеют слегка шероховатую поверхность и&nbsp;внешне напоминают классический беленый потолок.</p>
	                                <p href="javasvript:void(0);" class="catalog-cards__more">Подробнее</p>
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
	                        <a href="{{ route('catalogue', ['city' => $city, 'type' => $type]) }}" class=" catalog-cards__item catalog-cards__item_full b-card is-hoverable">
	                            <img src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
	                            <div class="catalog-cards__item-info">
	                                <h3 class="card-title catalog-cards__title">{{ $type->name }}</h3>
	                                <p class="catalog-cards__desc">Имеют слегка шероховатую поверхность и&nbsp;внешне напоминают классический беленый потолок.</p>
	                                <p href="javasvript:void(0);" class="catalog-cards__more">Подробнее</p>
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
			</div>

            <section class="catalogueCeilings__rooms photobank">
                @include('common.gui.titles', [
                    'secondTitle' =>  "Натяжные потолки в&nbsp;различных помещениях",
                    'class' =>  'container',
                    'text' =>  "Натяжные потолки&nbsp;&mdash; это универсальный способ отделки, который подойдет для любого помещения, тем более, что установка такого потолка не&nbsp;требует предварительного выравнивания поверхности. Полотно прекрасно выдерживает перепады температур, не&nbsp;теряет своих внешних качеств со&nbsp;временем и&nbsp;не&nbsp;требует специального ухода. Натяжные потолки прекрасно смотрятся&nbsp;в:"
                ])
                <div class="photobank__wrap">
                    <div class="photobank__list photobank__list_rooms">
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/hall-1@1x.jpg" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Прихожая</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/living@1x.jpg" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Зал</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/bedroom@1x.jpg" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Спальня</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/kitchen@1x.jpg" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Кухня</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/guest@1x.jpg" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Гостиная</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/bath@1x.jpg" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Ванная</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/children@1x.jpg" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Детская</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/mansarda@1x.jpg" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Мансарда</p>
                        </a>
                    </div>
                </div>
            </section>

            <section class="lamps-slider">
                @include('common.gui.titles', [
                    'class' =>  "container",
                    'secondTitle' =>  "Светильники для натяжных потолков"
                ])

               <a href="{{ route('lamps', $city) }}" class="lamps-slider__button">Все светильники</a>
            </section>
    	</section>
    @include('common.gui.footer')
@endsection
