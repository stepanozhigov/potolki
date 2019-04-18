@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <div id="climat-slider">
        <climat-slider ></climat-slider>
    </div>
    <section class="climatCatalogue climatCatalogue_main">
        @include('common.gui.titles', [
            'secondTitle' =>  "Каталог кондиционеров"
        ])
        <div class="climatCatalogue__content">
			<p class="climatCatalogue__heading" href="javascript:void(0);">Настройка фильтров
				<a class="climatCatalogue__filter-open" href="javascript:void(0);">
					<img src="/img/gui/filter.svg" alt="">
				</a>
			</p>
            <div class="climatCatalogue__list">
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
            </div>
            <aside>
                <div class="climatCatalogue__filter">

                    <p class="climatCatalogue__filter-overtitle">
						Настройка фильтров

					</p>
                    <a class="climatCatalogue__filter-close" href="javascript:void(0);">
                        <img src="/img/arrow-down.svg" alt="">
                    </a>
                    <div class="climatCatalogue__filter-content">
	                    <section class="climatCatalogue__filter-item opened">
	                        <p class="climatCatalogue__filter-title">Цена, рублей</p>
	                        <input data-type="double" data-min="1000" data-from="8000" data-to="40000" data-max="120000" class="range" type="text" name="" value="">
	                    </section>
	                    <section class="climatCatalogue__filter-item opened">
	                        <p class="climatCatalogue__filter-title">Производитель</p>
	                        <label class="checkbox">
	                            <input name="Electrolux" type="checkbox" class="checkbox__input">
	                            <span class=" checkbox__mark"></span>
	                            Electrolux
	                            <p class="checkbox__desc">Швеция</p>
	                        </label>
	                        <label class="checkbox">
	                            <input name="Fujitsu" type="checkbox" class="checkbox__input">
	                            <span class=" checkbox__mark"></span>
	                            Fujitsu
	                            <p class="checkbox__desc">Япония</p>
	                        </label>
	                        <label class="checkbox">
	                            <input name="Haier" type="checkbox" class="checkbox__input">
	                            <span class=" checkbox__mark"></span>
	                            Haier
	                            <p class="checkbox__desc">Германия</p>
	                        </label>
	                        <label class="checkbox">
	                            <input name="LG" type="checkbox" class="checkbox__input">
	                            <span class=" checkbox__mark"></span>
	                            LG
	                            <p class="checkbox__desc">Корея</p>
	                        </label>
	                        <label class="checkbox">
	                            <input name="Midea" type="checkbox" class="checkbox__input">
	                            <span class=" checkbox__mark"></span>
	                            Midea
	                            <p class="checkbox__desc">Германия</p>
	                        </label>
	                        <label class="checkbox">
	                            <input name="Mitsubishi" type="checkbox" class="checkbox__input">
	                            <span class=" checkbox__mark"></span>
	                            Mitsubishi
	                            <p class="checkbox__desc">Япония</p>
	                        </label>
	                        <label class="checkbox">
	                            <input name="Toshiba" type="checkbox" class="checkbox__input">
	                            <span class=" checkbox__mark"></span>
	                            Toshiba
	                            <p class="checkbox__desc">Япония</p>
	                        </label>
	                    </section>
	                    <a class="climatCatalogue__filter-more" href="javascript:void(0);"><span>Больше фильтров</span> →</a>
					</div>
					<div class="climatCatalogue__filter-buttons">
						<button class="climatCatalogue__filter-apply" type="button" name="button">Применить</button>
						<button class="climatCatalogue__filter-resetall" type="button" name="button">Сбросить всё</button>
					</div>
                </div>
                <a style="background-image: url(/img/climat/cheap-1440@2x.jpg)" class="linkBlock" href="javascript:void(0);"><p>10 самых недорогих кондиционеров</p></a>
                <a style="background-image: url(/img/climat/silent-1440@2x.jpg)" class="linkBlock" href="javascript:void(0);"><p>10 самых тихих кондиционеров</p></a>
            </aside>
        </div>
		<a class="climatCatalogue__link" href="javascripte:void(0)">Перейти в каталог</a>
    </section>
    <div class="climatAdditional">
        @include('common.gui.titles', [
            'secondTitle' =>  "Дополнительные услуги"
        ])
        <div class="climatAdditional__list">
            <a style="background-image: url(/img/climat/install-1440@2x.jpg)" class="linkBlock climatAdditional__item" href="javascript:void(0);"><p>Установка</p></a>
            <a style="background-image: url(/img/climat/service-1440@2x.jpg)" class="linkBlock climatAdditional__item" href="javascript:void(0);"><p>Сервис</p></a>
        </div>
    </div>
    <section class="reviews reviews_main container">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])

        <div class="reviews__content">
            @foreach($reviews as $review)
                @include('common.gui.review', $review)
            @endforeach
        </div>

        <div class="buttons reviews__buttons">
            <a href="{{ route('reviews', $city) }}" class="button  button_gray">Прочитать все отзывы</a>
        </div>
    </section>
    <section class="manufacturers manufacturers_main manufacturers_climat">
        <div class="container">
            @include('common.gui.titles', [
                'secondTitle' =>  "Производители кондиционеров"
            ])
            <div id="manufacturers__list"></div>
        </div>
    </section>
    <section class="articles articles_main articles_climat" id="articles">
        @include('common.gui.titles', [
            'class' =>  "container",
            'secondTitle' =>  "Наши посты из&nbsp;социальных сетей",
            'intro' =>  "Нажмите на&nbsp;логотип социальной сети и&nbsp;посмотрите там полезную информацию."
        ])
        <div class="socials titles__socials container">
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_insta"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_fb"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_vk"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_ok"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_youtube"></div>
            </a>
        </div>
        <posts :posts="{{ $articles }}"></posts>



       <a href="http://89.108.103.224/sochi/articles" class="articles__button">Все посты</a>

    </section>

    @include('common.gui.survey')
    @include('common.gui.footer')
@endsection
