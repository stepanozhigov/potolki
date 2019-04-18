@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')

	<section class="climatCatalogue climatCatalogue_detail">
        @include('common.gui.titles', [
            'title' =>  "Бытовые кондиционеры"
        ])
        <div class="climatCatalogue__content">
			<div class="climatCatalogue__sort">
                <p>Сортировать по:</p>
                <label class="climatCatalogue__sort-item">
                    <input name="sort" type="radio">
                    <p>рейтингу</p>
                </label>
                <label class="climatCatalogue__sort-item">
                    <input name="sort" type="radio">
                    <p>популярности</p>
                </label>
                <label class="climatCatalogue__sort-item">
                    <input name="sort" type="radio">
                    <p>скидке</p>
                </label>
                <label class="climatCatalogue__sort-item climatCatalogue__sort-item_multiple">
                    <input id="priceSort" name="price" type="checkbox" checked>
                    <p>возрастанию цены</p>
                </label>
                <label class="climatCatalogue__sort-item">
                    <input name="sort" type="radio">
                    <p>новизне</p>
                </label>
                <div class="climatCatalogue__orientation">
                    <label>

                        <input name="orientation" type="radio" value="cards" checked>
                        <span></span>
                        <svg width="12px" height="12px" viewBox="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>ℹ️ Icon</title>
                            <desc>Created with Sketch.</desc>
                            <g id="1.-Catalog" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Climat_1440-Catalog_List" transform="translate(-964.000000, -353.000000)" stroke="">
                                    <g id="ℹ️-Icon" transform="translate(964.000000, 353.000000)">
                                        <rect id="Rectangle" x="0.5" y="0.5" width="4" height="4" rx="0.5"></rect>
                                        <rect id="Rectangle" x="0.5" y="7.5" width="4" height="4" rx="0.5"></rect>
                                        <rect id="Rectangle" x="7.5" y="0.5" width="4" height="4" rx="0.5"></rect>
                                        <rect id="Rectangle" x="7.5" y="7.5" width="4" height="4" rx="0.5"></rect>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </label>
                    <label>
                        <input name="orientation" value="list" type="radio">
                        <span></span>
                        <svg width="13px" height="12px" viewBox="0 0 13 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Group</title>
                            <desc>Created with Sketch.</desc>
                            <g id="1.-Catalog" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                <g id="Climat_1440-Catalog_List" transform="translate(-990.000000, -353.000000)" stroke="">
                                    <g id="Group" transform="translate(990.000000, 353.000000)">
                                        <path d="M3.69230769,1 L12,1" id="Line-5"></path>
                                        <path d="M0.923076923,1 L1.38461538,1" id="Line-5"></path>
                                        <path d="M3.69230769,6 L12,6" id="Line-5"></path>
                                        <path d="M0.923076923,6 L1.38461538,6" id="Line-5"></path>
                                        <path d="M3.69230769,11 L12,11" id="Line-5"></path>
                                        <path d="M0.923076923,11 L1.38461538,11" id="Line-5"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
			<p class="climatCatalogue__result">
                Найдено 27 товаров  из 74:
            </p>
            <div class="climatCatalogue__list">
                <div class="climatCatalogue__heading">
                    <div class="climatCatalogue__sort-select">
                        <select class="" name="">
                            <option value="">По возрастанию цены</option>
                            <option value="">По убыванию цены</option>
                            <option value="">По скидке</option>
                            <option value="">По рейтингу</option>
                            <option value="">По новизне</option>
                        </select>
                    </div>
    				<a class="climatCatalogue__filter-open" href="javascript:void(0);">
    					<img src="/img/gui/filter.svg" alt="">
    				</a>
                </div>

                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                <a class="climatCatalogue__all" href="javascript:void(0);">Показать ещё 154 товара</a>
            </div>
            <aside>
                <div class="climatCatalogue__filter">

                    <p class="climatCatalogue__filter-overtitle">Настройка фильтров</p>
                    <a class="climatCatalogue__filter-close" href="javascript:void(0);">
                        <img src="/img/arrow-down.svg" alt="">
                    </a>
                    <div class="climatCatalogue__filter-content">

                        <section class="climatCatalogue__filter-item opened">
                            <p class="climatCatalogue__filter-title">Цена, рублей</p>
                            <input data-type="double" data-min="1000" data-from="8000" data-to="27000" data-max="60000" class="range" type="text" name="" value="">
                        </section>
                        <section class="climatCatalogue__filter-item opened">
                            <p class="climatCatalogue__filter-title">Тип <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="checkbox">
                                <input name="Wall" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Настенные
                                <p class="checkbox__desc">18</p>
                            </label>
                            <label class="checkbox">
                                <input name="Cassette" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Касетные
                                <p class="checkbox__desc">7</p>
                            </label>
                            <label class="checkbox">
                                <input name="mobile" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Мобильные
                                <p class="checkbox__desc">11</p>
                            </label>
                            <label class="checkbox">
                                <input name="Columned" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Колонные
                                <p class="checkbox__desc">5</p>
                            </label>
                            <label class="checkbox">
                                <input name="Floor-to-ceiling" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Напольно-потолочные
                                <p class="checkbox__desc">9</p>
                            </label>
                            <label class="checkbox">
                                <input name="Channel" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Канальные
                                <p class="checkbox__desc">4</p>
                            </label>
                        </section>
                        <section class="climatCatalogue__filter-item opened">
                            <p class="climatCatalogue__filter-title">Производитель <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="checkbox">
                                <input name="Avex" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Avex
                                <p class="checkbox__desc">Южная корея</p>
                            </label>
                            <label class="checkbox">
                                <input name="Candy" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Candy
                                <p class="checkbox__desc">Китай</p>
                            </label>
                            <label class="checkbox">
                                <input name="Midea" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Midea
                                <p class="checkbox__desc">Монголия</p>
                            </label>
                            <label class="checkbox">
                                <input name="Körting" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Körting
                                <p class="checkbox__desc">Щвейцария</p>
                            </label>
                            <label class="checkbox">
                                <input name="Kuppersberg" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Kuppersberg
                                <p class="checkbox__desc">Германия</p>
                            </label>
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
                        <section class="climatCatalogue__filter-item opened">
                            <p class="climatCatalogue__filter-title">Рейтинг <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="radio">
                                <input name="rating" type="radio" class="radio__input">
                                <span class=" radio__mark"></span>
                                <div class="climatCatalogue__rating">
                                    <div class="climatCatalogue__stars" data-rateyo-rating="4">
                                        <p></p>
                                    </div>
                                </div>
                                <p class="radio__desc">(18)</p>
                            </label>
                            <label class="radio">
                                <input name="rating" type="radio" class="radio__input">
                                <span class=" radio__mark"></span>
                                <div class="climatCatalogue__rating">
                                    <div class="climatCatalogue__stars" data-rateyo-rating="3">
                                        <p></p>
                                    </div>
                                </div>
                                <p class="radio__desc">(18)</p>
                            </label>
                            <label class="radio">
                                <input name="rating" type="radio" class="radio__input">
                                <span class=" radio__mark"></span>
                                <div class="climatCatalogue__rating">
                                    <div class="climatCatalogue__stars" data-rateyo-rating="2">
                                        <p></p>
                                    </div>
                                </div>
                                <p class="radio__desc">(18)</p>
                            </label>
                            <label class="radio">
                                <input name="rating" type="radio" class="radio__input">
                                <span class=" radio__mark"></span>
                                Любой/без рейтинга
                            </label>
                        </section>
                        <section class="climatCatalogue__filter-item opened">
                            <p class="climatCatalogue__filter-title">Площадь, м2 <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <input data-type="double" data-min="0" data-from="20" data-to="70" data-max="150" class="range" type="text" name="" value="">
                        </section>
                        <section class="climatCatalogue__filter-item opened">
                            <p class="climatCatalogue__filter-title">Возможности <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="checkbox">
                                <input name="heating" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Обогрев воздуха
                                <p class="checkbox__desc">18</p>
                            </label>
                            <label class="checkbox">
                                <input name="Inverter" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Инверторная система
                                <p class="checkbox__desc">7</p>
                            </label>
                            <label class="checkbox">
                                <input name="Supply" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Приточная вентеляция
                                <p class="checkbox__desc">11</p>
                            </label>
                            <label class="checkbox">
                                <input name="Timer" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Таймер
                                <p class="checkbox__desc">5</p>
                            </label>
                            <label class="checkbox">
                                <input name="Console" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                Пульт
                                <p class="checkbox__desc">9</p>
                            </label>
                        </section>
                        <section class="climatCatalogue__filter-item">
                            <p class="climatCatalogue__filter-title">Мощность <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="checkbox">
                                <input name="1" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                1
                                <p class="checkbox__desc">18</p>
                            </label>
                            <label class="checkbox">
                                <input name="2" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                2
                                <p class="checkbox__desc">7</p>
                            </label>
                            <label class="checkbox">
                                <input name="3" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                3
                                <p class="checkbox__desc">11</p>
                            </label>
                            <label class="checkbox">
                                <input name="4" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                4
                                <p class="checkbox__desc">5</p>
                            </label>
                            <label class="checkbox">
                                <input name="5" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                5
                                <p class="checkbox__desc">9</p>
                            </label>
                        </section>
                        <section class="climatCatalogue__filter-item">
                            <p class="climatCatalogue__filter-title">Уровень шума <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="checkbox">
                                <input name="1" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                1
                                <p class="checkbox__desc">18</p>
                            </label>
                            <label class="checkbox">
                                <input name="2" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                2
                                <p class="checkbox__desc">7</p>
                            </label>
                            <label class="checkbox">
                                <input name="3" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                3
                                <p class="checkbox__desc">11</p>
                            </label>
                        </section>
                        <section class="climatCatalogue__filter-item">
                            <p class="climatCatalogue__filter-title">Энергопотребление <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="checkbox">
                                <input name="1" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                1
                                <p class="checkbox__desc">18</p>
                            </label>
                            <label class="checkbox">
                                <input name="2" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                2
                                <p class="checkbox__desc">7</p>
                            </label>
                            <label class="checkbox">
                                <input name="3" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                3
                                <p class="checkbox__desc">11</p>
                            </label>
                        </section>
                        <section class="climatCatalogue__filter-item">
                            <p class="climatCatalogue__filter-title">Габариты и Вес <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="checkbox">
                                <input name="1" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                1
                                <p class="checkbox__desc">18</p>
                            </label>
                            <label class="checkbox">
                                <input name="2" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                2
                                <p class="checkbox__desc">7</p>
                            </label>
                            <label class="checkbox">
                                <input name="3" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                3
                                <p class="checkbox__desc">11</p>
                            </label>
                        </section>
                        <section class="climatCatalogue__filter-item">
                            <p class="climatCatalogue__filter-title">Гарантия <a class="climatCatalogue__filter-clear" href="javascript:void(0);">Сбросить</a></p>
                            <label class="checkbox">
                                <input name="1" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                1
                                <p class="checkbox__desc">18</p>
                            </label>
                            <label class="checkbox">
                                <input name="2" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                2
                                <p class="checkbox__desc">7</p>
                            </label>
                            <label class="checkbox">
                                <input name="3" type="checkbox" class="checkbox__input">
                                <span class=" checkbox__mark"></span>
                                3
                                <p class="checkbox__desc">11</p>
                            </label>
                        </section>

                        <a class="climatCatalogue__filter-reset" href="javascript:void(0);">Сбросить все фильтры</a>
                    </div>
                    <div class="climatCatalogue__filter-buttons">
                        <button class="climatCatalogue__filter-apply" type="button" name="button">Применить</button>
                        <button class="climatCatalogue__filter-resetall" type="button" name="button">Сбросить всё</button>
                    </div>
                </div>
            </aside>
        </div>
	</section>
    <section class="recent">
        @include('common.gui.titles', [
            'secondTitle' =>  "Вы недавно смотрели"
        ])
        <div class="recent__list">
            <article class="recent__item">
                <img class="recent__item-image" src="/img/climat/condition.jpg" alt="">
                <div class="recent__item-info">
                    <h3 class="recent__item-name">Samsung</h3>
                    <p class="recent__item-model">TRK100ZR-S</p>
                    <p class="recent__item-oldPrice"><span>900  995  ₽</span> <span>-15 %</span></p>
                    <p class="recent__item-price">864 395  ₽</p>
                </div>
            </article>
            <article class="recent__item">
                <img class="recent__item-image" src="/img/climat/condition.jpg" alt="">
                <div class="recent__item-info">
                    <h3 class="recent__item-name">Samsung</h3>
                    <p class="recent__item-model">TRK100ZR-S</p>
                    <p class="recent__item-oldPrice"><span>900  995  ₽</span> <span>-15 %</span></p>
                    <p class="recent__item-price">864 395  ₽</p>
                </div>
            </article>
            <article class="recent__item">
                <img class="recent__item-image" src="/img/climat/condition.jpg" alt="">
                <div class="recent__item-info">
                    <h3 class="recent__item-name">Samsung</h3>
                    <p class="recent__item-model">TRK100ZR-S</p>
                    <p class="recent__item-oldPrice"><span>900  995  ₽</span> <span>-15 %</span></p>
                    <p class="recent__item-price">864 395  ₽</p>
                </div>
            </article>
            <article class="recent__item">
                <img class="recent__item-image" src="/img/climat/condition.jpg" alt="">
                <div class="recent__item-info">
                    <h3 class="recent__item-name">Samsung</h3>
                    <p class="recent__item-model">TRK100ZR-S</p>
                    <p class="recent__item-oldPrice"><span>900  995  ₽</span> <span>-15 %</span></p>
                    <p class="recent__item-price">864 395  ₽</p>
                </div>
            </article>
        </div>
    </section>

    @include('common.gui.footer')
@endsection
