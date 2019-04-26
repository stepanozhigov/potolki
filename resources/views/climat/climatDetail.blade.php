@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <section class="climatDetail">
        <div class="climatDetail__main">
            <div class="climatDetail__gallery">
                <div class="climatDetail__gallery-list">
					<button class="climatDetail__gallery-prev" type="button" name="button"></button>
					<div class="climatDetail__gallery-wrap">
						<div class="climatDetail__gallery-item active">
							<img src="/img/climat/conditioner_1.jpg" alt="">
						</div>
						<div class="climatDetail__gallery-item">
							<img src="/img/climat/conditioner_2.jpg" alt="">
						</div>
						<div class="climatDetail__gallery-item">
							<img src="/img/climat/conditioner_3.jpg" alt="">
						</div>
						<div class="climatDetail__gallery-item">
							<img src="/img/climat/conditioner_4.jpg" alt="">
						</div>
					</div>
					<button class="climatDetail__gallery-next" type="button" name="button"></button>
                </div>
                <div class="climatDetail__gallery-preview">
                    <img src="/img/climat/conditioner_1_big.jpg" alt="">
					<div class="slider-dots">
						<button class="slider-dots__dot active"></button>
						<button class="slider-dots__dot"></button>
						<button class="slider-dots__dot"></button>
						<button class="slider-dots__dot"></button>
					</div>
                    <div class="climatDetail__controls">
                        <a class="climatDetail__comparison" href="javascript:void(0);">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="11" height="12" viewBox="0 0 11 12">
                               <defs><path id="hpyza" d="M150.5 1094v4"></path><path id="hpyzb" d="M155.5 1088v10"></path><path id="hpyzc" d="M160.5 1090v8"></path></defs>
                               <g>
                                   <g transform="translate(-150 -1087)">
                                       <g>
                                           <g>
                                               <g><use fill="#fff" fill-opacity="0" stroke="" stroke-linecap="round" stroke-miterlimit="50" xlink:href="#hpyza"></use></g>
                                               <g><use fill="#fff" fill-opacity="0" stroke="" stroke-linecap="round" stroke-miterlimit="50" xlink:href="#hpyzb"></use></g>
                                               <g><use fill="#fff" fill-opacity="0" stroke="" stroke-linecap="round" stroke-miterlimit="50" xlink:href="#hpyzc"></use></g>
                                           </g>
                                       </g>
                                   </g>
                               </g>
                            </svg>
                            <span>К сравнению</span>
                        </a>
                        <a class="climatDetail__favourites" href="javascript:void(0);">
                            <svg width="16px" height="14px" viewBox="0 0 16 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
                                <title>Page 1</title>
                                <desc>Created with Sketch.</desc>
                                <g id="1.1-Product-Card" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linejoin="round">
                                    <path d="M13.8545455,2.0206649 C13.5151508,1.67467421 13.1306833,1.41806922 12.7011369,1.25084109 C12.2715884,1.08361296 11.834094,1 11.3886353,1 C10.9431788,1 10.5056844,1.08361296 10.0761359,1.25084109 C9.64658938,1.41806922 9.26212189,1.67467421 8.92272727,2.0206649 L8,2.93753546 L7.07727273,2.0206649 C6.73787811,1.67467421 6.35341062,1.41806922 5.92386415,1.25084109 C5.49431564,1.08361296 5.05682124,1 4.61136465,1 C4.16590604,1 3.72841164,1.08361296 3.29886313,1.25084109 C2.86931604,1.41806922 2.48485018,1.67467421 2.14545455,2.0206649 C1.76363453,2.40125443 1.47727375,2.83085144 1.28636364,3.30947141 C1.09545359,3.78809139 1,4.27823693 1,4.77992354 C1,5.28160794 1.09545359,5.77463654 1.28636364,6.25902483 C1.47727375,6.74341091 1.76363453,7.17589097 2.14545455,7.55648051 L7.30513601,12.709693 C7.69269798,13.096769 8.30730202,13.096769 8.69486399,12.709693 L13.8545455,7.55648051 C14.2363657,7.17589097 14.5227273,6.74341091 14.7136364,6.25902483 C14.9045455,5.77463654 15,5.28160794 15,4.77992354 C15,4.27823693 14.9045455,3.78809139 14.7136364,3.30947141 C14.5227273,2.83085144 14.2363657,2.40125443 13.8545455,2.0206649 Z" id="Page-1" stroke=""></path>
                                </g>
                            </svg>
                            <span>В избранное</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="climatDetail__info">
				<h1 class="climatDetail__name">Samsung</h1>
				<p class="climatDetail__model">TR4000 JM2</p>
				<div class="climatDetail__rating">
					<div data-rateyo-rating="3" class="climatDetail__stars">

					</div>
					<p>13</p>
				</div>
				<div class="climatDetail__socials socials">
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
					<button class="share" type="button" name="button">
						<svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
						    <title>ℹ️ Icon</title>
						    <desc>Created with Sketch.</desc>
						    <g id="1.-Catalog" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <g id="ℹ️-Icon" transform="translate(0.000000, 1.000000)" stroke="">
						            <path d="M15.5002,2.4996 C15.5002,3.6036 14.6042,4.4996 13.5002,4.4996 C12.3962,4.4996 11.5002,3.6036 11.5002,2.4996 C11.5002,1.3956 12.3962,0.4996 13.5002,0.4996 C14.6042,0.4996 15.5002,1.3956 15.5002,2.4996 Z" id="Stroke-1"></path>
						            <path d="M12.5002,13.4996 C12.5002,14.6036 11.6042,15.4996 10.5002,15.4996 C9.3962,15.4996 8.5002,14.6036 8.5002,13.4996 C8.5002,12.3956 9.3962,11.4996 10.5002,11.4996 C11.6042,11.4996 12.5002,12.3956 12.5002,13.4996 Z" id="Stroke-3"></path>
						            <path d="M4.5002,6.943 C4.5002,8.047 3.6042,8.943 2.5002,8.943 C1.3962,8.943 0.5002,8.047 0.5002,6.943 C0.5002,5.839 1.3962,4.943 2.5002,4.943 C3.6042,4.943 4.5002,5.839 4.5002,6.943 Z" id="Stroke-5"></path>
						            <path d="M8.9543,12.233 L4.0473,8.212" id="Stroke-7"></path>
						            <path d="M4.5002,6.1354 L11.6462,3.2484" id="Stroke-9"></path>
						        </g>
						    </g>
						</svg>
					</button>
				</div>
				<div class="climatDetail__pay-info">
					<p class="climatDetail__price">864 395 ₽</p>
					<p class="climatDetail__old-price">
						<span>900 995  ₽</span>
						<span>-120 995  ₽</span>
					</p>
					<a class="climatDetail__basket" href="javascript:void(0);">В корзину</a>
					<a class="climatDetail__fastBuy" href="javascript:void(0);">Быстрая покупка</a>
				</div>
				<div class="climatDetail__params">
					<label class="climatDetail__param">
	                    <input name="param" type="radio" checked>
	                    <p>До 20 м<sup>2</sup></p>
	                </label>
					<label class="climatDetail__param">
	                    <input name="param" type="radio">
	                    <p>До 30 м<sup>2</sup></p>
	                </label>
					<label class="climatDetail__param">
	                    <input name="param" type="radio">
	                    <p>До 54 м<sup>2</sup></p>
	                </label>
					<label class="climatDetail__param">
	                    <input name="param" type="radio">
	                    <p>До 79 м<sup>2</sup></p>
	                </label>
					<label class="climatDetail__param">
	                    <input name="param" type="radio">
	                    <p>До 120 м<sup>2</sup></p>
	                </label>
				</div>
            </div>
        </div>
        <div class="climatDetail__additional">
			<div class="climatDetail__additional-content">
				<a class="climatDetail__additional-name active" href="javascript:void(0);">Описание</a>
				<a class="climatDetail__additional-name" href="javascript:void(0);">Характеристики</a>
				<a class="climatDetail__additional-name" href="javascript:void(0);">Отзывы <span>10</span></a>
				<div class="climatDetail__additional-value active">
					<h2>
						Описание Samsung TR4000 JM2
					</h2>
					<article class="climatDetail__additional-text">
						<p>
							Приятная прохлада или уютное тепло? Сплит-система Rapid RAC &minus; 09HJ/N1_18Y создаст в&nbsp;вашем доме комфортный климат. Кроме того, она может осушать воздух. Это поможет избежать появления неприятного запаха от&nbsp;отсыревшей одежды и&nbsp;распространения плесени в&nbsp;дождливые периоды, или если вы&nbsp;живёте в&nbsp;местности с&nbsp;высокой влажностью.
						</p>
						<h3>
							Разнообразие возможностей
						</h3>
						<p>
							Регулируйте работу устройства сами или доверьтесь автоматическому режиму Feel. Прибор определит температуру в&nbsp;помещении, после чего подберёт оптимальные параметры.
	В&nbsp;жаркий день вернулись домой, а&nbsp;в&nbsp;комнате настоящая &laquo;печка&raquo;? Активируйте Turbo: воздух охладится в&nbsp;кратчайшие сроки. С&nbsp;обогревом это тоже действует!
	Ночной цикл Sleep не&nbsp;потревожит даже очень чуткий сон. Скорость вращения вентилятора и&nbsp;направление потока воздуха можно менять&nbsp;&mdash; даже если система установлена прямо над вашей кроватью, простуды можно не&nbsp;бояться. Просто направьте жалюзи вверх, и&nbsp;прохладный ветерок будет дуть к&nbsp;потолку.
						</p>
						<h3>
							Удобно
						</h3>
						<p>
							Настраивайте таймер, чтобы к&nbsp;вашему возвращению дома были приятные условия. Не&nbsp;любите всю ночь спать при работающем кондиционере? Задайте время отключения, и&nbsp;не&nbsp;придётся просыпаться и&nbsp;искать пульт.
						</p>
						<h3>
							Просто ухаживать
						</h3>
						<p>
							Воздушный фильтр удерживает пыль. Менять его не&nbsp;требуется, достаточно лишь промывать тёплой водой с&nbsp;мягким моющим средством примерно через каждые 100 часов активности.
						</p>
					</article>
				</div>
				<div class="climatDetail__additional-value">
					<h2>
						Подробные характеристики
					</h2>
					<article class="climatDetail__additional-text climatDetail__additional-text_characteristic">
						<h3>
							Основные характеристики
						</h3>
						<div class="climatDetail__characteristic">
							<dl>
								<dt>Тип</dt>
								<dd>Настенная сплит-система</dd>
							</dl>
							<dl>
								<dt>Покрытие</dt>
								<dd>до 20м²</dd>
							</dl>
							<dl>
								<dt>Мощность охлаждения</dt>
								<dd>2200 Вт</dd>
							</dl>
							<dl>
								<dt>Мощность обогрева</dt>
								<dd>2300 Вт</dd>
							</dl>
							<dl>
								<dt>Потребляемая мощность при охлаждении</dt>
								<dd>820 Вт</dd>
							</dl>
							<dl>
								<dt>Потребляемая мощность при обогреве</dt>
								<dd>770 Вт</dd>
							</dl>
							<dl>
								<dt>Режимы</dt>
								<dd>вентиляции, поддержания температуры, ночной, осушения воздуха</dd>
							</dl>
							<dl>
								<dt>Энергоэффективность</dt>
								<dd>А класс</dd>
							</dl>
							<dl>
								<dt>Уровень шума</dt>
								<dd>27 дБ—36 дБ</dd>
							</dl>
							<dl>
								<dt>Приточная вентиляция</dt>
								<dd>нет</dd>
							</dl>
						</div>
						<h3>
							Управление
						</h3>
						<div class="climatDetail__characteristic">
							<dl>
								<dt>Пульт дистанционного управления</dt>
								<dd>Есть</dd>
							</dl>
							<dl>
								<dt>Таймер включения/выключения</dt>
								<dd>Есть</dd>
							</dl>
						</div>
						<h3>
							Особенности
						</h3>
						<div class="climatDetail__characteristic">
							<dl>
								<dt>Тип хладагента</dt>
								<dd>R 410A</dd>
							</dl>
							<dl>
								<dt>Фаза</dt>
								<dd>однофазный</dd>
							</dl>
							<dl>
								<dt>Фильтры воздуха</dt>
								<dd>нет</dd>
							</dl>
							<dl>
								<dt>Регулировка скорости вращения вентилятора</dt>
								<dd>есть</dd>
							</dl>
							<dl>
								<dt>Минимальная темп-ра эксплуатации </dt>
								<dd> -7 °С</dd>
							</dl>
							<dl>
								<dt>Дополнительная информация</dt>
								<dd>Wi-Fi управление – опция </dd>
							</dl>
						</div>
						<h3>
							Габариты
						</h3>
						<div class="climatDetail__characteristic">
							<dl>
								<dt>Внутреннего блока, ШxВxГ</dt>
								<dd>71.5x28.5x19.4 см </dd>
							</dl>
							<dl>
								<dt>Наружнего блока, ШxВxГ</dt>
								<dd>70x55x27.5 см</dd>
							</dl>
							<dl>
								<dt>Вес внутреннего блока</dt>
								<dd>7.5 кг</dd>
							</dl>
							<dl>
								<dt>Вес внешнего блока</dt>
								<dd>26 кг</dd>
							</dl>
						</div>
					</article>
				</div>
				<div class="climatDetail__additional-value climatDetail__additional-value_review">
					<h2>
						Отзывы о Samsung TR4000 JM2
					</h2>
					<a class="climatDetail__add-review" href="javascript:void(0);">Написать отзыв</a>
					<article class="climatDetail__reviews">
						<div class="climatDetail__review">
							<div class="climatDetail__review-person">
								<div class="climatDetail__review-image">
									<img src="/img/gui/avatar.svg" alt="">
								</div>
								<div class="climatDetail__review-wrap">
                                    <p class="climatDetail__review-name"><span>Анастасия</span> <span>Христарождественская</span></p>
    								<p class="climatDetail__review-date">11 сентября 2019</p>
    								<div data-rateyo-rating="4" class="climatDetail__review-stars"></div>
                                </div>
							</div>
							<div class="climatDetail__review-info">
								<dl>
									<dt>Достоинства</dt>
									<dd>1. Самодиагностика неисправностей, самоочистка 2. Таймер на вкл. выкл. 3. Память регулировки жалюзи 4. Префильтр высокой очистки</dd>
								</dl>
								<dl>
									<dt>Недостатки</dt>
									<dd>Нет показаний температуры возле месторасположения пульта</dd>
								</dl>
								<dl>
									<dt>Комментарий</dt>
									<dd>По характеристикам обслуживания до 26 м. кв. выбирали с запасом по площади, у нас 20 м. кв. с высокими потолками. Весной без отопления, когда еще минусовые температуры за окном полноценно работал на обогрев. В жаркую погоду на охлаждении недостатка не испытывали, если не хватает и охота подзамерзнуть — можно поставить интенсивный режим. Воздух постоянно чистый с запахом свежести. Хорошо устраняет высокую влажность и вентилирует помещение в независимом режиме. Основных замечаний нет, в самый раз для небольших комнат.</dd>
								</dl>
							</div>
						</div>
						<div class="climatDetail__review">
                            <div class="climatDetail__review-person">
								<div class="climatDetail__review-image">
									<img src="/img/gui/avatar.svg" alt="">
								</div>
								<div class="climatDetail__review-wrap">
                                    <p class="climatDetail__review-name"><span>Анастасия</span> <span>Христарождественская</span></p>
    								<p class="climatDetail__review-date">11 сентября 2019</p>
    								<div class="climatDetail__review-rating">
    									<div data-rateyo-rating="4" class="climatDetail__review-stars"></div>
    								</div>
                                </div>
							</div>
							<div class="climatDetail__review-info">
								<dl>
									<dt>Достоинства</dt>
									<dd>1. Самодиагностика неисправностей, самоочистка 2. Таймер на вкл. выкл. 3. Память регулировки жалюзи 4. Префильтр высокой очистки</dd>
								</dl>
								<dl>
									<dt>Недостатки</dt>
									<dd>Нет показаний температуры возле месторасположения пульта</dd>
								</dl>
								<dl>
									<dt>Комментарий</dt>
									<dd>По характеристикам обслуживания до 26 м. кв. выбирали с запасом по площади, у нас 20 м. кв. с высокими потолками. Весной без отопления, когда еще минусовые температуры за окном полноценно работал на обогрев. В жаркую погоду на охлаждении недостатка не испытывали, если не хватает и охота подзамерзнуть — можно поставить интенсивный режим. Воздух постоянно чистый с запахом свежести. Хорошо устраняет высокую влажность и вентилирует помещение в независимом режиме. Основных замечаний нет, в самый раз для небольших комнат.</dd>
								</dl>
							</div>
						</div>
						<div class="climatDetail__review">
                            <div class="climatDetail__review-person">
								<div class="climatDetail__review-image">
									<img src="/img/gui/avatar.svg" alt="">
								</div>
								<div class="climatDetail__review-wrap">
                                    <p class="climatDetail__review-name"><span>Анастасия</span> <span>Христарождественская</span></p>
    								<p class="climatDetail__review-date">11 сентября 2019</p>
    								<div class="climatDetail__review-rating">
    									<div data-rateyo-rating="4" class="climatDetail__review-stars"></div>
    								</div>
                                </div>
							</div>
							<div class="climatDetail__review-info">
								<dl>
									<dt>Достоинства</dt>
									<dd>1. Самодиагностика неисправностей, самоочистка 2. Таймер на вкл. выкл. 3. Память регулировки жалюзи 4. Префильтр высокой очистки</dd>
								</dl>
								<dl>
									<dt>Недостатки</dt>
									<dd>Нет показаний температуры возле месторасположения пульта</dd>
								</dl>
								<dl>
									<dt>Комментарий</dt>
									<dd>По характеристикам обслуживания до 26 м. кв. выбирали с запасом по площади, у нас 20 м. кв. с высокими потолками. Весной без отопления, когда еще минусовые температуры за окном полноценно работал на обогрев. В жаркую погоду на охлаждении недостатка не испытывали, если не хватает и охота подзамерзнуть — можно поставить интенсивный режим. Воздух постоянно чистый с запахом свежести. Хорошо устраняет высокую влажность и вентилирует помещение в независимом режиме. Основных замечаний нет, в самый раз для небольших комнат.</dd>
								</dl>
							</div>
						</div>
						<div class="climatDetail__review">
                            <div class="climatDetail__review-person">
								<div class="climatDetail__review-image">
									<img src="/img/gui/avatar.svg" alt="">
								</div>
								<div class="climatDetail__review-wrap">
                                    <p class="climatDetail__review-name"><span>Анастасия</span> <span>Христарождественская</span></p>
    								<p class="climatDetail__review-date">11 сентября 2019</p>
    								<div class="climatDetail__review-rating">
    									<div data-rateyo-rating="4" class="climatDetail__review-stars"></div>
    								</div>
                                </div>
							</div>
							<div class="climatDetail__review-info">
								<dl>
									<dt>Достоинства</dt>
									<dd>1. Самодиагностика неисправностей, самоочистка 2. Таймер на вкл. выкл. 3. Память регулировки жалюзи 4. Префильтр высокой очистки</dd>
								</dl>
								<dl>
									<dt>Недостатки</dt>
									<dd>Нет показаний температуры возле месторасположения пульта</dd>
								</dl>
								<dl>
									<dt>Комментарий</dt>
									<dd>По характеристикам обслуживания до 26 м. кв. выбирали с запасом по площади, у нас 20 м. кв. с высокими потолками. Весной без отопления, когда еще минусовые температуры за окном полноценно работал на обогрев. В жаркую погоду на охлаждении недостатка не испытывали, если не хватает и охота подзамерзнуть — можно поставить интенсивный режим. Воздух постоянно чистый с запахом свежести. Хорошо устраняет высокую влажность и вентилирует помещение в независимом режиме. Основных замечаний нет, в самый раз для небольших комнат.</dd>
								</dl>
							</div>
						</div>
					</article>
                    <a class="climatDetail__add-review" href="javascript:void(0);">Написать отзыв</a>
				</div>
			</div>
        </div>
    </section>
	<section class="recent recent_detail">
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
		<div class="slider-dots">
			<button class="slider-dots__dot active"></button>
			<button class="slider-dots__dot"></button>
			<button class="slider-dots__dot"></button>
			<button class="slider-dots__dot"></button>
		</div>
    </section>
	@include('common.gui.survey')
    @include('common.gui.footer')
@endsection
