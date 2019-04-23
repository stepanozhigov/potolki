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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="12" viewBox="0 0 15 12">
                               <defs><path id="6fhha" d="M307.005 1088.02a3.296 3.296 0 0 0-1.164-.77 3.654 3.654 0 0 0-1.325-.25c-.45 0-.892.084-1.325.25a3.295 3.295 0 0 0-1.165.77l-.931.918-.932-.917a3.295 3.295 0 0 0-1.164-.77 3.654 3.654 0 0 0-1.325-.251c-.45 0-.891.084-1.325.25a3.296 3.296 0 0 0-1.164.77c-.386.381-.675.81-.867 1.29a3.904 3.904 0 0 0 0 2.949c.192.484.481.917.867 1.297l5.209 5.154a.993.993 0 0 0 1.402 0l5.21-5.154c.385-.38.674-.813.866-1.297a3.904 3.904 0 0 0 0-2.95 3.787 3.787 0 0 0-.867-1.288z"></path>
                                   <clipPath id="6fhhb"><use fill="#fff" xlink:href="#6fhha"></use></clipPath>
                               </defs>
                               <g>
                                   <g transform="translate(-294 -1087)">
                                       <g>
                                           <g>
                                               <g><use fill="#fff" fill-opacity="0" stroke="" stroke-linejoin="round" stroke-miterlimit="50" stroke-width="2" clip-path="url(&quot;#6fhhb&quot;)" xlink:href="#6fhha"></use></g>
                                           </g>
                                       </g>
                                   </g>
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
		            <a href="" class="socials__item red-hoverable">
		                <div class="socials__icon socials__icon_youtube"></div>
		            </a>
					<button class="share" type="button" name="button"></button>
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
	                    <p>До 20 м2</p>
	                </label>
					<label class="climatDetail__param">
	                    <input name="param" type="radio">
	                    <p>До 30 м2</p>
	                </label>
					<label class="climatDetail__param">
	                    <input name="param" type="radio">
	                    <p>До 54 м2</p>
	                </label>
					<label class="climatDetail__param">
	                    <input name="param" type="radio">
	                    <p>До 79 м2</p>
	                </label>
					<label class="climatDetail__param">
	                    <input name="param" type="radio">
	                    <p>До 120 м2</p>
	                </label>
				</div>
            </div>
        </div>
        <div class="climatDetail__additional">
			<div class="climatDetail__additional-content">
				<a class="climatDetail__additional-name active" href="javascript:void(0);">Описание</a>
				<a class="climatDetail__additional-name" href="javascript:void(0);">Характеристики</a>
				<a class="climatDetail__additional-name" href="javascript:void(0);">Отзывы <span>10</span></a>
				<a class="climatDetail__additional-name" href="javascript:void(0);">Аксессуары</a>
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
						Вкладка 2
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
						Вкладка 3
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
						Вкладка 4
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
