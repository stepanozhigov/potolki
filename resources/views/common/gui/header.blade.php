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
	                <a class="text menu__item js-toggle-submenu">Каталог</a>
	                <div class="menu__dropdown menu__dropdown_big">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="javascript:void(0);" class="text menu__dropdown-link">Каталог</a>
                        </div>

	                    <div class="menu__wrap">
                            <h3 class="menu__item-title">Потолки</h3>
                            <a href="" class="text menu__item menu__item_bordered">Матовые</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Глягцевые</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Сатиновые</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Тканевые</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Резные</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Парящие</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Звездное небо</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Двухуровневые</a>
                        </div>
	                    <div class="menu__wrap">
                            <h3 class="menu__item-title">Помещения</h3>
                            <a href="" class="text menu__item menu__item_bordered">Матовые</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Глягцевые</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Сатиновые</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Тканевые</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Резные</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Парящие</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Звездное небо</a>
    	                    <a href="" class="text menu__item menu__item_bordered">Двухуровневые</a>
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

	                    <a href="{{ route('services', [$city, 'measurements']) }}" class="text menu__item menu__item_bordered">Бесплатный замер</a>
	                    <a href="{{ route('photoprint', $city) }}" class="text menu__item menu__item_bordered">Фотопечать</a>
	                    <a href="{{ route('ustanovka', $city) }}" class="text menu__item menu__item_bordered">Установка</a>
	                    <a href="{{ route('sliv', $city) }}" class="text menu__item menu__item_bordered">Слив воды</a>
	                    <a href="{{ route('zamenaPolotna', $city) }}" class="text menu__item menu__item_bordered">Замена полотна</a>
	                    <a href="{{ route('remont', $city) }}" class="text menu__item menu__item_bordered">Ремонт</a>
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
                    @foreach($cities as $otherCity)
                        @if ($otherCity->offices->count() > 0 && $otherCity->id !== $city->id)
                            <a href="{{ route('ceilings', $otherCity) }}" class="text dropdown__item dropdown__item_bordered red-hoverable">{{ $otherCity->name}}</a>
                        @endif
                    @endforeach
                    <p class="dropdown__title">Не нашли ваш город?</p>
                    <menu-city-search :cities="{{ $cities }}"></menu-city-search>
                </div>
            </div>
        @endif


        <div class="header__feedbacks">
            <a href="https://api.whatsapp.com/send?phone={{ $city->whatsapp }}" class="text whatsapp header__whatsapp red-hoverable"><img src="/img/gui/whatsapp.svg" alt="" class="whatsapp__icon"> <span class="whatsapp__write-text">Написать в&nbsp</span>WhatsApp <span class="whatsapp__mobile-text">Написать</span></a>
            <a href="tel:{{ $city->phone }}" class="text phone header__phone  red-hoverable"><img class="phone__icon" src="/img/gui/phone.svg" alt="">{{ $city->phone }} <span data-src="#popup_callback" class="js-show">Заказать звонок</span></a>
            <a data-src="#popup_callback" class="text header__callback js-show">Заказать звонок</a>
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
                <a class="text menu__item js-toggle-submenu">Каталог</a>
                <div class="menu__dropdown menu__dropdown_big">
                    <div class="menu__dropdown-heading">
                        <a href="javascript:void(0);" class="menu__item-nav">
                            <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                        </a>
                        <a href="javascript:void(0);" class="text menu__dropdown-link">Каталог</a>
                    </div>

                    <div class="menu__wrap">
                        <h3 class="menu__item-title">Потолки</h3>
                        <a href="{{ route('services', $city) }}" class="text menu__item menu__item_bordered">Матовые</a>
                        <a href="{{ route('about', $city) }}" class="text menu__item menu__item_bordered">Глягцевые</a>
                        <a href="{{ route('employees', $city) }}" class="text menu__item menu__item_bordered">Сатиновые</a>
                        <a href="{{ route('vacancies', $city) }}" class="text menu__item menu__item_bordered">Тканевые</a>
                        <a href="{{ route('questions', $city) }}" class="text menu__item menu__item_bordered">Резные</a>
                        <a href="{{ route('reviews', $city) }}" class="text menu__item menu__item_bordered">Парящие</a>
                        <a href="{{ route('articles', $city) }}" class="text menu__item menu__item_bordered">Звездное небо</a>
                        <a href="{{ route('dirMessage', $city) }}" class="text menu__item menu__item_bordered">Двухуровневые</a>
                    </div>
                    <div class="menu__wrap">
                        <h3 class="menu__item-title">Помещения</h3>
                        <a href="{{ route('services', $city) }}" class="text menu__item menu__item_bordered">Матовые</a>
                        <a href="{{ route('about', $city) }}" class="text menu__item menu__item_bordered">Глягцевые</a>
                        <a href="{{ route('employees', $city) }}" class="text menu__item menu__item_bordered">Сатиновые</a>
                        <a href="{{ route('vacancies', $city) }}" class="text menu__item menu__item_bordered">Тканевые</a>
                        <a href="{{ route('questions', $city) }}" class="text menu__item menu__item_bordered">Резные</a>
                        <a href="{{ route('reviews', $city) }}" class="text menu__item menu__item_bordered">Парящие</a>
                        <a href="{{ route('articles', $city) }}" class="text menu__item menu__item_bordered">Звездное небо</a>
                        <a href="{{ route('dirMessage', $city) }}" class="text menu__item menu__item_bordered">Двухуровневые</a>
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

                    <a href="{{ route('services', [$city, 'measurements']) }}" class="text menu__item menu__item_bordered">Бесплатный замер</a>
                    <a href="{{ route('photoprint', $city) }}" class="text menu__item menu__item_bordered">Фотопечать</a>
                    <a href="{{ route('ustanovka', $city) }}" class="text menu__item menu__item_bordered">Установка</a>
                    <a href="{{ route('sliv', $city) }}" class="text menu__item menu__item_bordered">Слив воды</a>
                    <a href="{{ route('zamenaPolotna', $city) }}" class="text menu__item menu__item_bordered">Замена полотна</a>
                    <a href="{{ route('remont', $city) }}" class="text menu__item menu__item_bordered">Ремонт</a>
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
            <a href="tel:{{ $city->phone }}" class="header__phone">{{ $city->phone }}<span data-src="#popup_callback" class="js-show">заказать звонок</span></a>
            <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger active js-toggle-menu">
    		<img src="/img/gui/mobile-menu-close.svg" alt="" class="header__close js-toggle-menu">
        </div>
    </div>
</div>
<main class="page">
