<header class="header headerClimat">
    <div class="headerClimat__heading">
        <div class="container">
            <div class="header__offices dropdown">
                <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $city->mainOffice() }}</a>
                <div class="dropdown__content">
                    <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $city->mainOffice() }}</a>
                    @if ($city->offices->count()> 1)
                        <p class="dropdown__title">Другие офисы в городе</p>

                        @foreach($city->offices as $office)
                            @if (strpos($city->mainOffice(), $office->adres) === false)
                                <a class="text dropdown__item dropdown__item_bordered red-hoverable">{{ $city->name}}, {{ $office->adres }}</a>
                            @endif
                        @endforeach
                    @endif

                    <p class="dropdown__title">Офисы в других городах</p>
                    @foreach($cities as $otherCity)
                        @if ($otherCity->offices->count() > 0 && $otherCity->id !== $city->id)
                            <a href="{{ route('windows.main', $otherCity) }}" class="text dropdown__item dropdown__item_bordered red-hoverable">{{ $otherCity->name}}</a>
                        @endif
                    @endforeach
                    <p class="dropdown__title">Не нашли ваш город?</p>
                    <menu-city-search :cities="{{ $cities }}"></menu-city-search>
                </div>
            </div>
            <div class="header__feedbacks">
                <a href="https://api.whatsapp.com/send?phone={{ $city->whatsapp }}" class="text whatsapp header__whatsapp red-hoverable"><img src="/img/gui/whatsapp_climat.svg" alt="" class="whatsapp__icon"> <span class="whatsapp__write-text">Написать в&nbsp</span>WhatsApp <span class="whatsapp__mobile-text">написать</span></a>
                <a href="tel:{{ $city->phone }}" class="text phone header__phone  red-hoverable"><img class="phone__icon" src="/img/gui/phone_climat.svg" alt="">{{ $city->phone }} <span data-src="#popup_callback" class="js-show">заказать звонок</span></a>
                <a data-src="#popup_callback" class="text header__callback js-show">Заказать звонок</a>
            </div>
            <a class="headerClimat__shipping" href="javascript:void(0);">Доставка и оплата</a>
            <nav class="menu header__menu" id="">
                <div class="menu__item menu__item_dropdown">
                    <a class="text menu__item js-toggle-submenu">Информация</a>
                    <div class="menu__dropdown">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="javascript:void(0);" class="text menu__dropdown-link">Информация</a>
                        </div>

                        <a href="{{ route('services', request()->route()->city) }}" class="text menu__item menu__item_bordered">Услуги</a>
                        <a href="{{ route('about', request()->route()->city) }}" class="text menu__item menu__item_bordered">О компании</a>
                        <a href="{{ route('employees', request()->route()->city) }}" class="text menu__item menu__item_bordered">Сотрудники</a>
                        <a href="{{ route('vacancies', request()->route()->city) }}" class="text menu__item menu__item_bordered">Вакансии</a>
                        <a href="{{ route('questions', request()->route()->city) }}" class="text menu__item menu__item_bordered">Вопрос-ответ</a>
                        <a href="{{ route('reviews', request()->route()->city) }}" class="text menu__item menu__item_bordered">Отзывы</a>
                        <a href="{{ route('articles', request()->route()->city) }}" class="text menu__item menu__item_bordered">Статьи</a>
                        <a href="{{ route('dirMessage', request()->route()->city) }}" class="text menu__item menu__item_bordered">Написать директору</a>
                    </div>
                </div>
            </nav>
            <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger active js-toggle-menu">
			<img src="/img/gui/mobile-menu-close.svg" alt="" class="header__close js-toggle-menu">
        </div>

    </div>
	<div class="headerClimat__main">
        <a href="{{ route('windows.main', $city) }}" class="header__logo logo">
            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text mobile-hide" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
        </a>
        <div class="header__directions dropdown">
            <a class="text dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $currentDirection->name }}</a>

            <div class="dropdown__content">
                <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{!! $currentDirection->name !!}</a>
                <p class="dropdown__title">Другие направления</p>
                @foreach ($directions as $direction)
                    <a href="{{ $direction->site  ?? '' }}" class="text dropdown__item dropdown__item_bordered  red-hoverable">{!! $direction->name !!}</a>
                @endforeach
            </div>
        </div>
        <form class="headerClimat__search">
            <button class="headerClimat__back-button" type="button" name="button">
                <img src="/img/gui/arrow.svg" alt="">
            </button>
            <input class="search__input" type="text" name="" value="" placeholder="Поиск по каталогу">
            <button class="search__submit" type="submit" name="button">
                <img src="/img/gui/search.svg" alt="">
            </button>
            <button class="headerClimat__search-button" type="button" name="button">
                <img src="/img/gui/search.svg" alt="">
            </button>
        </form>
        <div class="headerClimat__login">
            <a href="javascript:void(0);">Войти</a>
            <a href="javascript:void(0);">Регистрация</a>
        </div>
        <a href="javascript:void(0);" class="headerClimat__basket">
            Корзина
        </a>
	</div>
	<div class="headerClimat__footer">
		<div class="headerClimat__footer-content">
			<a class="headerClimat__link" href="javascript:void(0);">Бытовые <span>кондиционеры</span> </a>
	        <a class="headerClimat__link" href="javascript:void(0);">Коммерческие <span>кондиционеры</span> </a>
	        <a class="headerClimat__link" href="javascript:void(0);">Промышленные <span>кондиционеры</span> </a>
	        <a class="headerClimat__link" href="javascript:void(0);">Установка</a>
	        <a class="headerClimat__link" href="javascript:void(0);">Опт</a>
	        <a class="headerClimat__more" href="javascript:void(0);">Ещё</a>
	        <div class="headerClimat__dropdown">
	            <a class="headerClimat__link" href="javascript:void(0);">Промышленные <span>кондиционеры</span> </a>
	            <a class="headerClimat__link" href="javascript:void(0);">Установка</a>
	            <a class="headerClimat__link" href="javascript:void(0);">Опт</a>
	        </div>
		</div>

	</div>
    @include('common.gui.mobileMenu')
    <button class="goTop" type="button" name="button">
        <img class="" src="/img/gui/arrow.svg" alt="">
    </button>
    <div class="stickyLinks">
        <a href="javascript:void(0);" class="favourites stickyLinks__item">
            <p class="favourites__name">
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
				Избранное</p>
            <p class="favourites__val">2 <span>товара</span></p>
        </a>
        <a href="javascript:void(0);" class="comparison stickyLinks__item">
            <p class="comparison__name">
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
				Сравнение</p>
            <p class="comparison__val">2 <span>товара</span></p>
        </a>
        <a href="javascript:void(0);" class="basket stickyLinks__item">
            <p class="basket__name">
				<svg width="22px" height="20px" viewBox="0 0 22 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
				    <title>Group 5</title>
				    <desc>Created with Sketch.</desc>
				    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				        <g id="Group-5" transform="translate(1.000000, 1.000000)" stroke="" stroke-width="1.01">
				            <polyline id="Stroke-1" stroke-linecap="round" stroke-linejoin="round" points="7.7694 11.23536 19.2018 11.23536 20.4006 3.72096 5.9682 2.74416"></polyline>
				            <path d="M20.17188,15.87588 L19.38228,15.87588" id="Stroke-3" stroke-linecap="round"></path>
				            <path d="M6.63912,15.8724 C5.62752,15.858 4.81152,15.0612 4.81152,14.076 C4.81152,13.3908 5.21472,12.7632 5.84952,12.4608 L6.67632,12.0672 C7.18872,11.8236 7.46712,11.2752 7.35672,10.7328 L5.34912,0.9828 C5.23152,0.4104 4.71432,-6.92779167e-14 4.11432,-6.92779167e-14" id="Stroke-5" stroke-linecap="round"></path>
				            <path d="M16.31472,15.87588 L9.70632,15.87588" id="Stroke-7" stroke-linecap="round"></path>
				            <path d="M2.2668,0.00048 L4.99600361e-15,0.00048" id="Stroke-9" stroke-linecap="round"></path>
				            <path d="M9.80904,16.41264 C9.80904,17.28864 9.07584,18.00024 8.17224,18.00024 C7.26864,18.00024 6.53544,17.28864 6.53544,16.41264 C6.53544,15.53664 7.26864,14.82504 8.17224,14.82504 C9.07584,14.82504 9.80904,15.53664 9.80904,16.41264 Z" id="Stroke-11"></path>
				            <path d="M19.48572,16.41264 C19.48572,17.28864 18.75252,18.00024 17.84892,18.00024 C16.94412,18.00024 16.21212,17.28864 16.21212,16.41264 C16.21212,15.53664 16.94412,14.82504 17.84892,14.82504 C18.75252,14.82504 19.48572,15.53664 19.48572,16.41264 Z" id="Stroke-13"></path>
				        </g>
				    </g>
				</svg>
				Корзина</p>
            <p class="basket__val">2 <span>товара</span></p>
            <p class="basket__price">325 990 ₽</p>
        </a>
    </div>
</header>
<div class="header header_hidden">
    <div class="header__content">
        <a href="{{ route('windows.main', $city) }}" class="logo">
            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text mobile-hide" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
        </a>
        <nav class="menu header__menu" id="">
            <div class="menu__item menu__item_dropdown">

                <a href="{{ route('calculator', $city) }}" class="text menu__item js-toggle-submenu">Калькулятор</a>

                <div class="menu__dropdown">
                    <div class="menu__dropdown-heading">
                        <a href="javascript:void(0);" class="menu__item-nav">
                            <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                        </a>
                        <a href="{{ route('calculator', $city) }}" class="text menu__dropdown-link">Калькулятор</a>
                    </div>
                    <a href="{{ route('calculator', ['city' => $city, 'type' => 'okna']) }}" class="text menu__item menu__item_bordered">Окна</a>
                    <a href="{{ route('calculator', ['city' => $city, 'type' => 'balkony']) }}" class="text menu__item menu__item_bordered">Балконы</a>
                    <!--<a href="{{ route('calculator', ['city' => $city, 'type' => 'dveri']) }}" class="text menu__item menu__item_bordered">Двери</a>
                    <a href="{{ route('calculator', ['city' => $city, 'type' => 'peregorodki']) }}" class="text menu__item menu__item_bordered">Перегородки</a>
                    <a href="{{ route('calculator', ['city' => $city, 'type' => 'zhalyuzi']) }}" class="text menu__item menu__item_bordered">Жалюзи</a>-->
                </div>
            </div>

            <a href="{{ route('services', [$city, 'measurements']) }}" class="text menu__item">Бесплатный замер</a>
            <a href="{{ route('promos', $city) }}" class="text menu__item">Скидки</a>
            <a href="{{ route('photos', $city) }}" class="text menu__item">Фото</a>
            <a href="{{ route('contacts', $city) }}" class="text menu__item">Контакты</a>
            <div class="menu__item menu__item_dropdown">
                <a class="text menu__item js-toggle-submenu">Информация</a>
                <div class="menu__dropdown">
                    <div class="menu__dropdown-heading">
                        <a href="javascript:void(0);" class="menu__item-nav">
                            <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                        </a>
                        <a href="javascript:void(0);" class="text menu__dropdown-link">Информация</a>
                    </div>

                    <a href="{{ route('services', $city) }}" class="text menu__item menu__item_bordered">Услуги</a>
                    <a href="{{ route('about', $city) }}" class="text menu__item menu__item_bordered">О компании</a>
                    <a href="{{ route('employees', $city) }}" class="text menu__item menu__item_bordered">Сотрудники</a>
                    <a href="{{ route('vacancies', $city) }}" class="text menu__item menu__item_bordered">Вакансии</a>
                    <a href="{{ route('questions', $city) }}" class="text menu__item menu__item_bordered">Вопрос-ответ</a>
                    <a href="{{ route('reviews', $city) }}" class="text menu__item menu__item_bordered">Отзывы</a>
                    <a href="{{ route('articles', $city) }}" class="text menu__item menu__item_bordered">Статьи</a>
                    <a href="{{ route('dirMessage', $city) }}" class="text menu__item menu__item_bordered">Написать директору</a>
                </div>
            </div>
        </nav>
    </div>
    @include('common.gui.mobileMenu')
	<button class="goTop" type="button" name="button"></button>
</header>
<div class="header header_hidden">
    <div class="header__content">
        <a href="{{ route('windows.main', $city) }}" class="logo">
            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text mobile-hide" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
        </a>
        <div class="header__feedbacks">
            <a href="https://api.whatsapp.com/send?phone={{ $city->whatsapp }}" class="header__whatsapp">WhatsApp<span>написать</span></a>
            <a href="tel:{{ $city->phone }}" class="header__phone">{{ $city->phone }}<span data-src="#popup_callback" class="js-show">заказать звонок</span></a>
            <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger active js-toggle-menu">
    		<img src="/img/gui/mobile-menu-close.svg" alt="" class="header__close js-toggle-menu">
        </div>
    </div>
</div>
<main class="page">
