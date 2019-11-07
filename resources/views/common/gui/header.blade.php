<?
$city = $city ?? App\City::find(1);
?>
<header class="header">
    <div class="header__top ">
		<div class="header__top-content container">
			<a href="{{ route('ceilings', $city) }}" class="header__logo logo">
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
	        <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger active js-toggle-menu">
			<img src="/img/gui/mobile-menu-close.svg" alt="" class="header__close js-toggle-menu">
	        <nav class="menu header__menu" id="">
				<div class="menu__item menu__item_dropdown">
	                <a href="{{ route('catalogueCeilings', $city) }}"  class="text menu__item js-toggle-submenu">Каталог</a>
	                <div class="menu__dropdown menu__dropdown_big">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="{{ route('catalogueCeilings', $city) }}" class="text menu__dropdown-link">Каталог</a>
                        </div>

	                    <div class="menu__wrap">
                            <h3 class="menu__item-title">Потолки</h3>
                            @foreach(App\CatalogType::where(['direction_id' => 2])->get() as $section)
                                @if ($section->type != 'rooms')
                                    @if ($section->id == 23)
                                        <a href="{{ route('photoprint', ['city' => $city]) }}" class="text menu__item menu__item_bordered">{{ $section->name }}</a>
                                    @else
                                        <a href="{{ route('catalogue', ['city' => $city, 'type' => $section]) }}" class="text menu__item menu__item_bordered">{{ $section->name }}</a>
                                    @endif
                                @endif

                            @endforeach

                        </div>
	                    <div class="menu__wrap">
                            <h3 class="menu__item-title">Помещения</h3>
                            @foreach(App\CatalogType::where(['direction_id' => 2, 'type' => 'rooms'])->get() as $room)
                                <a href="{{ route('catalogue', ['city' => $city, 'type' => $room]) }}" class="text menu__item menu__item_bordered">{{ $room->name }}</a>
    	                    @endforeach
                        </div>
	                </div>
	            </div>
				<div class="menu__item menu__item_dropdown">
	                <a class="text menu__item js-toggle-submenu">Услуги</a>
	                <div class="menu__dropdown">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="javascript:void(0);" class="text menu__dropdown-link">Услуги</a>
                        </div>

	                    <a href="{{ route('services', ['city' => $city, 'type' => 'measurements']) }}" class="text menu__item menu__item_bordered">Бесплатный замер</a>
	                    <a href="{{ route('photoprint', $city) }}" class="text menu__item menu__item_bordered">Фотопечать</a>
	                    <a href="{{ route('services', ['city' => $city, 'type' => 'ustanovka']) }}" class="text menu__item menu__item_bordered">Установка</a>
	                    <a href="{{ route('services', ['city' => $city, 'type' => 'sliv']) }}" class="text menu__item menu__item_bordered">Слив воды</a>
	                    <a href="{{ route('services', ['city' => $city, 'type' => 'zamenaPolotna']) }}" class="text menu__item menu__item_bordered">Замена полотна</a>
	                    <a href="{{ route('services', ['city' => $city, 'type' => 'remont']) }}" class="text menu__item menu__item_bordered">Ремонт</a>
	                    <a href="{{ route('credit', $city) }}" class="text menu__item menu__item_bordered">Рассрочка</a>
	                </div>
	            </div>
	            <a href="{{ route('ceilingsCalc', $city) }}" class="text menu__item">Калькулятор</a>
	            <a href="{{ route('promos', $city) }}" class="text menu__item">Скидки</a>
	            <a href="{{ route('photos', $city) }}" class="text menu__item">Фото</a>

	            <div class="menu__item menu__item_dropdown">
	                <a class="text menu__item js-toggle-submenu">Информация</a>
	                <div class="menu__dropdown">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="javascript:void(0);" class="text menu__dropdown-link">Информация</a>
                        </div>

                        <a href="{{ route('about', $city) }}" class="text menu__item menu__item_bordered">О компании</a>
                        <a href="{{ route('dillers', $city) }}" class="text menu__item menu__item_bordered">Диллерам</a>
                        <a href="{{ route('contacts', $city) }}" class="text menu__item menu__item_bordered">Контакты</a>
                        <a href="{{ route('employees', $city) }}" class="text menu__item menu__item_bordered">Сотрудники</a>
                        <a href="{{ route('reviews', $city) }}" class="text menu__item menu__item_bordered">Отзывы</a>
                        <a href="{{ route('questions', $city) }}" class="text menu__item menu__item_bordered">Вопрос-ответ</a>
                        <a href="{{ route('vacancies', $city) }}" class="text menu__item menu__item_bordered">Вакансии</a>
                        <a href="{{ route('dirMessage', $city) }}" class="text menu__item menu__item_bordered">Написать директору</a>
	                </div>
	            </div>
	        </nav>
		</div>
    </div>
    <div class="header__bottom container">
        @if (!empty(\Request::route()) && \Request::route()->getName() != 'ceilings')
            {{ Breadcrumbs::render(\Request::route()->getName(), $city) }}
        @else
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
                    <menu-city-search :cities="{{ $cities }}"></menu-city-search>

                    <!-- <p class="dropdown__title">Не нашли ваш город?</p> -->

                </div>
            </div>
        @endif


        <div class="header__feedbacks">
            <a data-title="Написать в&nbspWhatsapp" data-src="#popup_whatsapp" class="js-show text whatsapp header__whatsapp red-hoverable"><img src="/img/gui/whatsapp.svg" alt="" class="whatsapp__icon"> <span class="whatsapp__write-text">Написать в&nbsp</span>WhatsApp <span class="whatsapp__mobile-text">Написать</span></a>
            <a href="tel:{{ $currentDirection->phone }}" class="text phone header__phone  red-hoverable"><img class="phone__icon" src="/img/gui/phone.svg" alt="">{{ $currentDirection->phone }} <span data-src="{{ route('forms.callback', $city) }}" class="js-link">Заказать звонок</span></a>
            <a href="{{ route('forms.callback', $city) }}" class="text header__callback">Заказать звонок</a>
        </div>
    </div>
    @include('common.gui.mobileMenu', ['city' => $city])
</header>
<div class="header header_hidden">
    <div class="header__content">
        <a href="{{ route('ceilings', $city) }}" class="logo">
            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text mobile-hide" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
        </a>
        <nav class="menu header__menu" id="">
            <div class="menu__item menu__item_dropdown">
                <a href="{{ route('catalogueCeilings', $city) }}" class="text menu__item js-toggle-submenu">Каталог</a>
                <div class="menu__dropdown menu__dropdown_big">
                    <div class="menu__dropdown-heading">
                        <a href="javascript:void(0);" class="menu__item-nav">
                            <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                        </a>
                        <a href="javascript:void(0);" class="text menu__dropdown-link">Каталог</a>
                    </div>

                    <div class="menu__wrap">
                        <h3 class="menu__item-title">Потолки</h3>
                        @foreach(App\CatalogType::where(['direction_id' => 2])->get() as $section)
                            @if ($section->type != 'rooms')
                                @if ($section->id == 23)
                                    <a href="{{ route('photoprint', ['city' => $city]) }}" class="text menu__item menu__item_bordered">{{ $section->name }}</a>
                                @else
                                    <a href="{{ route('catalogue', ['city' => $city, 'type' => $section]) }}" class="text menu__item menu__item_bordered">{{ $section->name }}</a>
                                @endif
                            @endif

                        @endforeach
                    </div>
                    <div class="menu__wrap">
                        <h3 class="menu__item-title">Помещения</h3>
                        @foreach(App\CatalogType::where(['direction_id' => 2, 'type' => 'rooms'])->get() as $room)
                            <a href="{{ route('catalogue', ['city' => $city, 'type' => $room]) }}" class="text menu__item menu__item_bordered">{{ $room->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="menu__item menu__item_dropdown">
                <a class="text menu__item js-toggle-submenu">Услуги</a>
                <div class="menu__dropdown">
                    <div class="menu__dropdown-heading">
                        <a href="javascript:void(0);" class="menu__item-nav">
                            <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                        </a>
                        <a href="javascript:void(0);" class="text menu__dropdown-link">Услуги</a>
                    </div>
                    <a href="{{ route('services', ['city' => $city, 'type' => 'measurements']) }}" class="text menu__item menu__item_bordered">Бесплатный замер</a>
                    <a href="{{ route('photoprint', $city) }}" class="text menu__item menu__item_bordered">Фотопечать</a>
                    <a href="{{ route('services', ['city' => $city, 'type' => 'ustanovka']) }}" class="text menu__item menu__item_bordered">Установка</a>
                    <a href="{{ route('services', ['city' => $city, 'type' => 'sliv']) }}" class="text menu__item menu__item_bordered">Слив воды</a>
                    <a href="{{ route('services', ['city' => $city, 'type' => 'zamenaPolotna']) }}" class="text menu__item menu__item_bordered">Замена полотна</a>
                    <a href="{{ route('services', ['city' => $city, 'type' => 'remont']) }}" class="text menu__item menu__item_bordered">Ремонт</a>
                    <a href="{{ route('credit', $city) }}" class="text menu__item menu__item_bordered">Рассрочка</a>
                </div>
            </div>
            <a href="{{ route('ceilingsCalc', $city) }}" class="text menu__item">Калькулятор</a>
            <a href="{{ route('promos', $city) }}" class="text menu__item">Скидки</a>
            <a href="{{ route('photos', $city) }}" class="text menu__item">Фото</a>

            <div class="menu__item menu__item_dropdown">
                <a class="text menu__item js-toggle-submenu">Информация</a>
                <div class="menu__dropdown">
                    <div class="menu__dropdown-heading">
                        <a href="javascript:void(0);" class="menu__item-nav">
                            <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                        </a>
                        <a href="javascript:void(0);" class="text menu__dropdown-link">Информация</a>
                    </div>

                    <a href="{{ route('about', $city) }}" class="text menu__item menu__item_bordered">О компании</a>
                    <a href="{{ route('dillers', $city) }}" class="text menu__item menu__item_bordered">Диллерам</a>
                    <a href="{{ route('contacts', $city) }}" class="text menu__item menu__item_bordered">Контакты</a>
                    <a href="{{ route('employees', $city) }}" class="text menu__item menu__item_bordered">Сотрудники</a>
                    <a href="{{ route('reviews', $city) }}" class="text menu__item menu__item_bordered">Отзывы</a>
                    <a href="{{ route('questions', $city) }}" class="text menu__item menu__item_bordered">Вопрос-ответ</a>
                    <a href="{{ route('vacancies', $city) }}" class="text menu__item menu__item_bordered">Вакансии</a>
                    <a href="{{ route('dirMessage', $city) }}" class="text menu__item menu__item_bordered">Написать директору</a>
                </div>
            </div>
        </nav>
        <div class="header__feedbacks">
            <a href="https://api.whatsapp.com/send?phone={{ $city->whatsapp }}" class="header__whatsapp">WhatsApp<span>Написать</span></a>
            <a href="{{ route('forms.callback', $city) }}" class="header__phone">{{ $currentDirection->phone }}<span class="js-link" data-src="{{ route('forms.callback', $city) }}">заказать звонок</span></a>
            <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger active js-toggle-menu">
    		<img src="/img/gui/mobile-menu-close.svg" alt="" class="header__close js-toggle-menu">
        </div>
    </div>
</div>
<main class="page">
