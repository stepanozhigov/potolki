<header class="header">
    <div class="header__top ">
		<div class="header__top-content container">
			<a href="{{ route('windows.main', $city) }}" class="header__logo logo">
	            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
	            <img class="logo__text mobile-hide" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
	        </a>
	        <div class="header__directions dropdown">
	            <a class="text dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $currentDirection->name }}</a>

	            <div class="dropdown__content">
	                <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $currentDirection->name }}</a>
	                <p class="dropdown__title">Другие направления</p>
	                @foreach ($directions as $direction)
	                    <a href="{{ $direction->site }}" class="text dropdown__item dropdown__item_bordered  red-hoverable">{{ $direction->name }}</a>
	                @endforeach
	            </div>
	        </div>
	        <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger active js-toggle-menu">
			<img src="/img/gui/mobile-menu-close.svg" alt="" class="header__close js-toggle-menu">
	        <nav class="menu header__menu" id="mobileMenu">
	            <div class="menu__item menu__item_dropdown">

	                <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item js-toggle-submenu">Калькулятор</a>

	                <div class="menu__dropdown">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__dropdown-link">Калькулятор</a>
                        </div>
	                    <a href="{{ route('calculator', ['city' => $city, 'type' => 'okna']) }}" class="text menu__item menu__item_bordered">Окна</a>
	                    <a href="{{ route('calculator', ['city' => $city, 'type' => 'balkony']) }}" class="text menu__item menu__item_bordered">Балконы</a>
	                    <!--<a href="{{ route('calculator', ['city' => $city, 'type' => 'dveri']) }}" class="text menu__item menu__item_bordered">Двери</a>
	                    <a href="{{ route('calculator', ['city' => $city, 'type' => 'peregorodki']) }}" class="text menu__item menu__item_bordered">Перегородки</a>
	                    <a href="{{ route('calculator', ['city' => $city, 'type' => 'zhalyuzi']) }}" class="text menu__item menu__item_bordered">Жалюзи</a>-->
	                </div>
	            </div>

	            <a href="{{ route('services', [request()->route()->city, 'measurements']) }}" class="text menu__item">Бесплатный замер</a>
	            <a href="{{ route('promos', request()->route()->city) }}" class="text menu__item">Скидки</a>
	            <a href="{{ route('photos', request()->route()->city) }}" class="text menu__item">Фото</a>

	            <div class="menu__item menu__item_dropdown">
	                <a class="text menu__item js-toggle-submenu">Информация</a>
	                <div class="menu__dropdown">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="javascript:void(0);" class="text menu__dropdown-link">Информация</a>
                        </div>
	                    <a href="{{ route('contacts', request()->route()->city) }}" class="text menu__item menu__item_bordered">Контакты</a>
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
		</div>
    </div>
    <div class="header__bottom container">
        <div class="header__offices dropdown">
            <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $city->mainOffice() }}</a>
            <div class="dropdown__content">
                <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $city->mainOffice() }}</a>
                <p class="dropdown__title">Другие города</p>
                @foreach ($cities as $arCity)
                    <a href="{{ route('windows.main', $arCity)}}" class="text dropdown__item dropdown__item_bordered  red-hoverable">{{ $arCity->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="header__feedbacks">
            <a href="https://api.whatsapp.com/send?phone={{ $city->whatsapp }}" class="text whatsapp header__whatsapp red-hoverable"><img src="/img/gui/whatsapp.svg" alt="" class="whatsapp__icon"> <span class="whatsapp__write-text">Написать в&nbsp</span>WhatsApp <span class="whatsapp__mobile-text">написать</span></a>
            <a href="tel:{{ $city->phone }}" class="text phone header__phone  red-hoverable"><img class="phone__icon" src="/img/gui/phone.svg" alt="">{{ $city->phone }} <span>заказать звонок</span></a>
            <a data-src="#popup_callback" class="text header__callback js-show">Заказать звонок</a>
        </div>
    </div>
</header>
<div class="header header_hidden">
    <div class="header__content">
        <a href="{{ route('windows.main', $city) }}" class="logo">
            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text mobile-hide" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
        </a>
        <div class="header__feedbacks">
            <a href="https://api.whatsapp.com/send?phone={{ $city->whatsapp }}" class="text whatsapp header__whatsapp red-hoverable"><img src="/img/gui/whatsapp.svg" alt="" class="whatsapp__icon"> <span class="whatsapp__write-text">Написать в&nbsp</span>WhatsApp <span class="whatsapp__mobile-text">написать</span></a>
            <a href="tel:{{ $city->phone }}" class="text phone header__phone  red-hoverable"><img class="phone__icon" src="/img/gui/phone.svg" alt="">{{ $city->phone }} <span>заказать звонок</span></a>
            <a data-src="#popup_callback" class="text header__callback js-show">Заказать звонок</a>
            <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger active js-toggle-menu">
    		<img src="/img/gui/mobile-menu-close.svg" alt="" class="header__close js-toggle-menu">
            <nav class="menu header__menu" id="fixedMobileMenu">
                <div class="menu__item menu__item_dropdown">

                    <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item js-toggle-submenu">Калькулятор</a>

                    <div class="menu__dropdown">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__dropdown-link">Калькулятор</a>
                        </div>
                        <a href="{{ route('calculator', ['city' => $city, 'type' => 'okna']) }}" class="text menu__item menu__item_bordered">Окна</a>
                        <a href="{{ route('calculator', ['city' => $city, 'type' => 'balkony']) }}" class="text menu__item menu__item_bordered">Балконы</a>
                        <!--<a href="{{ route('calculator', ['city' => $city, 'type' => 'dveri']) }}" class="text menu__item menu__item_bordered">Двери</a>
                        <a href="{{ route('calculator', ['city' => $city, 'type' => 'peregorodki']) }}" class="text menu__item menu__item_bordered">Перегородки</a>
                        <a href="{{ route('calculator', ['city' => $city, 'type' => 'zhalyuzi']) }}" class="text menu__item menu__item_bordered">Жалюзи</a>-->
                    </div>
                </div>

                <a href="{{ route('services', [request()->route()->city, 'measurements']) }}" class="text menu__item">Бесплатный замер</a>
                <a href="{{ route('promos', request()->route()->city) }}" class="text menu__item">Скидки</a>
                <a href="{{ route('photos', request()->route()->city) }}" class="text menu__item">Фото</a>

                <div class="menu__item menu__item_dropdown">
                    <a class="text menu__item js-toggle-submenu">Информация</a>
                    <div class="menu__dropdown">
                        <div class="menu__dropdown-heading">
                            <a href="javascript:void(0);" class="menu__item-nav">
                                <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                            </a>
                            <a href="javascript:void(0);" class="text menu__dropdown-link">Информация</a>
                        </div>
                        <a href="{{ route('contacts', request()->route()->city) }}" class="text menu__item menu__item_bordered">Контакты</a>
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
        </div>
    </div>
</div>
<main>
