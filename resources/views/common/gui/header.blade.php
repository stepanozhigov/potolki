<header class="header">
    <div class="header__top container">
        <a href="/" class="header__logo logo">
            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text mobile-hide" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">        
        </a>
        <div class="header__directions dropdown">
            <a class="text dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $currentDirection->name }}</a>
            
            <div class="dropdown__content">
                <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $currentDirection->name }}</a>
                <p class="dropdown__title">Другие направления</p>
                @foreach ($directions as $direction)
                    <a href="{{ $direction->site }}" class="text dropdown__item dropdown__item_bordered">{{ $direction->name }}</a>
                @endforeach
            </div>            
        </div>
        <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger js-show-menu">
        <nav class="menu header__menu">
            <img src="/img/gui/close.svg" alt="" class="menu__close js-close-menu">
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item">Калькулятор</a>
                <div class="dropdown__content dropdown__content_menu">
                    <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Окна</a>    
                    <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Балконы</a>    
                    <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Двери</a>    
                    <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Перегородки</a>    
                    <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Жалюзи</a>
                </div>
            </div>
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="{{ route('services', request()->route()->city) }}" class="text menu__item">Услуги</a>
                <div class="dropdown__content dropdown__content_menu">
                    <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Услуги</a>    
                </div>
            </div>
            <a href="{{ route('promos', request()->route()->city) }}" class="text menu__item">Скидки</a>
            <a href="{{ route('photos', request()->route()->city) }}" class="text menu__item">Фото</a>
            
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="/asd" class="text menu__item">Информация</a>
                <div class="dropdown__content dropdown__content_menu">
                    <a href="{{ route('contacts', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Контакты</a>
                    <a href="{{ route('about', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">О компании</a>    
                    <a href="{{ route('employees', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Сотрудники</a>
                    <a href="{{ route('vacancies', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Вакансии</a>
                    <a href="{{ route('questions', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Вопрос-ответ</a>
                    <a href="{{ route('reviews', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Отзывы</a>
                    <a href="{{ route('dirMessage', request()->route()->city) }}" class="text menu__item dropdown__item_bordered">Написать директору</a>
                </div>
            </div>
        </nav>
    </div>
    <hr class="header__line">
    <div class="header__bottom container">
        <div class="header__offices dropdown">
            <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">Владивосток, Запорожская, 77</a>
            <div class="dropdown__content">
                <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">Владивосток, Запорожская, 77</a>
                <p class="dropdown__title">Другие направления</p>
                @foreach ($directions as $direction)
                    <a href="{{ $direction->site }}" class="text dropdown__item dropdown__item_bordered">{{ $direction->name }}</a>
                @endforeach
            </div>    
        </div>
        <div class="header__feedbacks">
            <a href="" class="text phone header__phone"><img class="phone__icon" src="/img/gui/phone.svg" alt=""> 8 800 333-97-14</a>
            <a href="" class="text whatsapp header__whatsapp"><img src="/img/gui/whatsapp.svg" alt="" class="whatsapp__icon"> Написать в WhatsApp</a>
            <a href="" data-src="#popup_callback" class="text header__callback js-show">Заказать звонок</a>
        </div>
    </div>    
</header>