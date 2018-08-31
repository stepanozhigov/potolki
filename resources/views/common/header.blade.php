<header class="header">
    <div class="header__top container">
        <a href="/" class="header_logo logo">
            <img class="logo__icon" src="/img/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text" src="/img/logo-text.svg" alt="графема Твой Стиль">        
        </a>
        <div class="header__directions dropdown">
            <a class="dropdown__item dropdown__item_active"><i class="arrow arrow_down dropdown__arrow"></i>{{ $currentDirection->name }}</a>
            
            @foreach ($directions as $direction)
                <a href="{{ $direction->site }}" class="dropdown__item">{{ $direction->name }}</a>
            @endforeach
        </div>

        <nav class="menu header__menu">
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="/asd" class="menu__item">Калькулятор</a>
            </div>
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="/asd" class="menu__item">Услуги</a>
            </div>
            <a href="/asd" class="menu__item">Скидки</a>
            <a href="/asd" class="menu__item">Фото</a>
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="/asd" class="menu__item">Информация</a>
            </div>
        </nav>
    </div>
    <hr class="header__line">
    <div class="header__bottom container">
        <div class="header__offices dropdown">
            <a class="dropdown__item dropdown__item_active"><i class="arrow arrow_down dropdown__arrow"></i> Владивосток, Запорожская, 77</a>
        </div>
        <div class="header__feedbacks">
            <a href="" class="phone header__phone">8 800 333-97-14</a>
            <a href="" class="whatsapp header__whatsapp">Написать в WhatsApp</a>
            <a href="" class="header__callback">Заказать звонок</a>
        </div>
    </div>    
</header>