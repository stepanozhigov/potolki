@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="hero">
		<div class="wrapper hero__content">
            <p class="hero__overtitle">Монтаж 1 день | Гарантия 30 лет</p>
			<h1 class="hero__title">
				<b>Натяжные потолки</b><br>
				{!! $city->name_formatted !!}<br class="hidden-sm">
				от 100 <span class="rouble">8</span>/м²
			</h1>
			<p class="hero__intro">Вызовите специалиста для<br class="hidden-sm"> замера и расчёта</p>
			<form class="formN hero__form js-less" method="POST" action="{{ route('forms.feedback', $city) }}" id="offer-form">
                @csrf
                <input type="hidden" name="city" value="{{ $city->bx_code }}">
                <input name="phone" required class="inputN" type="tel" placeholder="Ваш телефон">
				<button type="submit" class="buttonN buttonN-red btn-4">Вызвать замерщика</button>
				<p class="form__agreement">Оставляя контактную информацию, вы соглашаетесь на <u>обработку персональных данных</u></p>
			</form>
		</div>
    </section>

    <section class="section texture_sand">
		<div class="wrapper offer">
            <h2 class="offer__title"><b>Новогодняя скидка!</b></h2>
            <picture>
                <source data-srcset="/img/templates/ceilings/offer/new_year/double_sale_lg.webp" type="image/webp" class="lazyload">
                <img class="offer__img lazyload" data-src="/img/templates/ceilings/offer/new_year/double_sale_lg.png" loading="lazy" alt="Увеличиваем скидки до 60%">
            </picture>
			<p class="offer__intro">Только до 31 декабря!</p>
			<form class="formN js-less" action="{{ route('forms.feedback', $city) }}" method="POST">
                @csrf
                <input type="hidden" name="city" value="{{ $city->bx_code }}">
                <input class="inputN" type="tel" name="phone" required placeholder="Ваш телефон">  
				<button class="buttonN buttonN-light btn-pulse">Получить скидку</button>
				<p class="formN__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
			</form>
		</div> 
    </section>

    <section class="wrapper calc section" id="calc_home">
        <h2 class="title-dec">Калькулятор</h2>
        <p class="calc__item calc__item-intro">
            Расчёт стоимости натяжного потолка <span class="b-color_red">по акции</span>.
            Для точного расчёта необходимо произвести замер!
        </p>
        <div class="calc__item">
            <p class="calc__item-name">Площадь помещения</p>
            <input value="1" name="area" data-min="0" data-from="1" data-max="150" class="range" type="text">
        </div>
        <div class="calc__item">
            <p class="calc__item-name">Количество светильников</p>
            <input name="lamps" data-min="0" data-max="30" class="range" type="text">
        </div>
        <div class="calc__item">
            <p class="calc__item-name">Цена с установкой</p>
            <p class="calc__total"><span class="js-calc-price">350</span> ₽</p>
        </div>
        <a href="{{ route('forms.measure', $city) }}" class="calc__callback buttonN buttonN-red btn-4">Вызвать замерщика</a>
    </section>

    <section class="sale wrapper">
		<h2 class="sale__title">
			Нашли дешевле?<br>
			<b>Сделаем скидку!</b>
		</h2>
		<img class="sale__img lazyload" data-src="/img/templates/gui/offer/opponent_sale.svg" loading="lazy" alt="Скидка до 500р от цены конкурента">
		<button data-src="#popup_sale" class="buttonN buttonN-light sale__button js-show btn-4">Получить скидку</button>
    </section>

    <section class="section catalog">
			<h2 class="title-dec catalog__title">Каталог натяжных потолков {!! $city->name_formatted !!} от производителя</h2>
			<div class="catalog__carousel" id="catalog__carousel" data-cats="{{ $catalogTypes }}" data-city="{{ $city }}"></div>
			<a href="{{ route('catalogueCeilings', ['city' => $city]) }}" class="buttonN buttonN-light catalog__button btn-4">Перейти в каталог</a>
    </section>

    <section class="section wrapper skills">
        <?
            $region = "на&nbsp;Дальнем Востоке";

            if ($city->code == 'krasnodar' || $city->code == 'sochi') {
                $region = 'в&nbsp;Краснодарском крае';
            }
            if ($city->code == 'moskva' || $city->code == 'dolgoprudnyj') {
                $region = 'в&nbsp;Москве и области';
            }
        ?>
		<p class="skills__overtitle">Наши преимущества</p>
		<h2 class="title-dec skills__title">Звонят многим, заказывают у нас. Почему?</h2>
		<p class="skills__intro">
			Фабрика натяжных потолков «Твой&nbspстиль» основана в 2003 году и является лидером по производству и установке натяжных потолков {!!$region!!}.
		</p>
		<div class="advantages">
			<article class="advantage">
                <picture>
                    <source data-srcset="/img/templates/ceilings/advantages/factory.webp" type="image/webp" class="lazyload">
                    <img class="advantage__img lazyload" data-src="/img/templates/ceilings/advantages/factory.jpg" loading="lazy" alt="Собственное производство">
                </picture>
				<div class="advantage__wrap order">
					<h3 class="advantage__title">Главные плюсы организации</h3>
					<p class="intro advantage__intro">— Контроль качества после монтажа</p>
					<p class="intro advantage__intro">— Наличие своего производства</p>
                    <p class="intro advantage__intro">— Подписание договора на дому</p>
                    <p class="intro advantage__intro">— Сервисное обслуживание</p>
                    <p class="intro advantage__intro">— Установка за один день</p>
                    <p class="intro advantage__intro">— Выгодные цены</p>
                    <p class="intro advantage__intro">— 16 лет опыта</p>
				</div>
			</article>
			<article class="advantage">
                
                <picture>
                    <source data-srcset="/img/templates/ceilings/advantages/director.webp" type="image/webp" class="lazyload">
                    <img class="advantage__img lazyload" data-src="/img/templates/ceilings/advantages/director.jpg" loading="lazy" alt="Генеральный директор Репин А.А. всегда на связи">
                </picture>
				<div class="advantage__wrap">
					<h3 class="advantage__title">Директор всегда на связи</h3>
					<p class="intro advantage__intro">
                        Я лично контролирую все этапы работы с помощью прямого контакта со своими клиентами. 
                        Вы можете написать мне в любую социальную сеть или позвонить.<br> 
                        Прямая линия обеспечивает ответственную работу каждого сотрудника. 
                        Считаю это самым важным фактором для моих клиентов.
					</p>
					<div class="advantage__signature">
                        <span class="advantage__signature_name">А. А. Репин</span>
                        <picture>
                            <source data-srcset="/img/templates/ceilings/advantages/signature.webp" type="image/webp" class="lazyload">
                            <img class="advantage__signature_img lazyload" data-src="/img/templates/ceilings/advantages/signature.png" loading="lazy" alt="signature">
                        </picture>
					</div>
				</div>
				<a href="https://www.instagram.com/business_repin/" target="_blank" class="buttonN buttonN-inst btn-4">Директор в Instagram</a>
			</article>
		</div>
    </section>
    
    <section class="section constructor hidden-xs">
        <div class="constructor__image"></div>
        <h2 class="title-dec">Визуализация потолков</h2>
        <p class="constructor__text">Выберите цвет вашего потолка и посмотрите как это выглядит в интерьере при помощи конструктора.</p>
        <a class="buttonN buttonN-light constructor__link btn-4" href="{{ route('constructor', $city) }}">Конструктор</a>
    </section>

    <section class="portfolio portfolio_main portfolio_ceilings">
        @include('common.gui.titles', ['secondTitle' => 'Примеры наших работ'])
        <div class="portfolio__carousel" id="portfolio__carousel" data-photos="{{ $photos }}">
        </div>
        <div class="buttons portfolio__buttons">
			<a href="{{ route('photos', $city) }}" class="button button_gray btn-4">Посмотреть все работы</a>
			<a href="{{ route('forms.measure', $city) }}" class="button buttons__item btn-4">Вызвать замерщика</a>
        </div>
    </section>

    <section class="reviews reviews_main container hidden-xs">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])

        <div class="reviews__content">
            @foreach($reviews as $review)
                @include('common.gui.review', $review)
            @endforeach
        </div>

        <div class="buttons reviews__buttons">
			<a href="{{ route('reviews', $city) }}" class="button  button_gray btn-4">Все отзывы</a>
			<a href="{{ route('add-review', $city) }}" class="button buttons__item btn-4">Оставить отзыв</a>
        </div>
    </section>

    <section class="manufactur section wrapper">
        <h2 class="manufactur__title title-dec">Производители плёнки</h2>
        <p class="manufactur__subtitle subtitleN">Компания &laquo;Твой стиль&raquo; ипользует плёнку для натяжных потолков ведущих мировых производителей. Мы&nbsp;предлагаем нашим клиентам только сертифицированные материалы. В&nbsp;нашем ассортименте можно выбрать полотна из&nbsp;пленки ПВХ и&nbsp;тканевые полотна следующих производителей.</p>
        <div class="manufactur__items">   
            <div class="manufactur__item">
                <img data-src="/img/manufacturers/clipso.svg" loading="lazy" alt="clipso" class="manufactur__item-image lazyload">
                <span class="manufactur__item-name">Франция</span>
            </div>
            <div class="manufactur__item">
                <img data-src="/img/manufacturers/pongs.svg" loading="lazy" alt="pongs" class="manufactur__item-image lazyload">    
                <span class="manufactur__item-name">Германия</span>
            </div>
            <div class="manufactur__item">
                <img data-src="/img/manufacturers/lackfole.svg" loading="lazy" alt="lackfole" class="manufactur__item-image lazyload">
                <span class="manufactur__item-name">Германия</span>
            </div>
            <div class="manufactur__item">
                <img data-src="/img/manufacturers/msd.svg" loading="lazy" alt="msd" class="manufactur__item-image lazyload">
                <span class="manufactur__item-name">Китай</span>
            </div>
        </div>
    </section>

    <section class="other section wrapper">
        <a href="{{ route('services', [request()->route()->city, 'deal']) }}" class="other__item is-hoverable">
            <picture>
                <source data-srcset="/img/templates/ceilings/other/home_deal.webp" type="image/webp" class="lazyload">
                <img data-src="img/templates/ceilings/other/home_deal.png" loading="lazy" alt="home_deal" class="other__img lazyload">
            </picture>
            <h3 class="other__title">Договор на дому</h3>
            <p class="other__text">
                Для вашего удобства замерный <br> мастер  может заключить <br>договор у вас дома.
            </p>
        </a>
        <a href="{{ route('lamps', request()->route()->city) }}" class="other__item is-hoverable">
            <picture>
                <source data-srcset="/img/templates/ceilings/other/lamp.webp" type="image/webp" class="lazyload">
                <img data-src="img/templates/ceilings/other/lamp.png" loading="lazy" alt="lamp" class="other__img lazyload">
            </picture>
            <h3 class="other__title">Светильники</h3>
            <p class="other__text">
                Поможем подобрать специальные<br> светильники для натяжных<br> потолков.
            </p>
        </a> 
        <a href="{{ route('services', [request()->route()->city, 'measurements']) }}" class="other__item is-hoverable">
            <picture>
                <source data-srcset="/img/templates/ceilings/other/free_measure.webp" type="image/webp" class="lazyload">
                <img data-src="img/templates/ceilings/other/free_measure.png" loading="lazy" alt="free_measure" class="other__img lazyload">
            </picture>
            <h3 class="other__title">Бесплатный замер</h3>
            <p class="other__text">
                Наш технолог произведет замер<br> и расчет стоимости заказа<br> в удобное для вас время.
            </p>
        </a>
    </section>

	<section class="seo-block seo-block_main">
        <div class="wrapper">
            <div class="seo-block__content">
                <div class="seo-block__items">
                    <div class="seo-block__item">
                        <h3 class="seo-block__item-title">{!! str_replace('#city_title#', $city->name_formatted, $seoData->first_title) !!}</h3>
                        {!! str_replace('#city_title#', $city->name_formatted, $seoData->first_text) !!}
                    </div>
                    @if ($seoData->firm_img)
                    <div data-src="#videoBlock" class="seo-block__item-video js-show">
                        <img data-src="{{ Storage::url($seoData->firm_img) }}" loading="lazy" alt="video" class="lazyload">
                        <p>Видео о компании</p>
                    </div>
                    @endif
                </div>
                <div class="seo-block__items seo-block__items_reverse">
                    <div class="seo-block__item">
                        <h3 class="seo-block__item-title">{{ $seoData->second_title }}</h3>
                        {!! $seoData->second_text !!}
                    </div>
                    @if ($seoData->second_img)
                        <img data-src="{{ Storage::url($seoData->second_img) }}" loading="lazy" alt="" class="seo-block__item-img lazyload">
                    @endif
                </div>
                <div class="seo-block__items">
                    <div class="seo-block__item">
                        <h3 class="seo-block__item-title">{{ $seoData->third_title }}</h3>
                        {!! $seoData->third_text !!}
                    </div>
                    @if ($seoData->third_img)
                        <img data-src="{{ Storage::url($seoData->third_img) }}" loading="lazy" alt="" class="seo-block__item-img lazyload">
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('common.gui.survey')

    @include('common.gui.footer')
@endsection