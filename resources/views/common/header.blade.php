<header class="header">
    <div class="header__top container">
        <a href="/" class="header_logo logo">
            <img class="logo__icon" src="/img/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text" src="/img/logo-text.svg" alt="графема Твой Стиль">        
        </a>
        <div class="header__directions dropdown">
            <a class="dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/arrow.svg" alt="">{{ $currentDirection->name }}</a>
            
            <div class="dropdown__content">
                <a class="dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/arrow.svg" alt="">{{ $currentDirection->name }}</a>
                @foreach ($directions as $direction)
                    <a href="{{ $direction->site }}" class="dropdown__item">{{ $direction->name }}</a>
                @endforeach
            </div>            
        </div>

        <nav class="menu header__menu">
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="{{ route('calculator', request()->route()->city) }}" class="menu__item">Калькулятор</a>
            </div>
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="{{ route('services', request()->route()->city) }}" class="menu__item">Услуги</a>
            </div>
            <a href="{{ route('promos', request()->route()->city) }}" class="menu__item">Скидки</a>
            <a href="{{ route('photos', request()->route()->city) }}" class="menu__item">Фото</a>
            
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="/asd" class="menu__item">Информация</a>
            </div>
        </nav>
    </div>
    <hr class="header__line">
    <div class="header__bottom container">
        <div class="header__offices dropdown">
            <a class="dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/arrow.svg" alt=""> Владивосток, Запорожская, 77</a>
        </div>
        <div class="header__feedbacks">
            <a href="" class="phone header__phone"><img class="phone__icon" src="/img/phone.svg" alt=""> 8 800 333-97-14</a>
            <a href="" class="whatsapp header__whatsapp">Написать в WhatsApp</a>
            <a href="" class="header__callback">Заказать звонок</a>
        </div>
    </div>    
</header>