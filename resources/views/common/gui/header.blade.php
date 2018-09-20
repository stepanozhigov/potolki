<header class="header">
    <div class="header__top container">
        <a href="/" class="header_logo logo">
            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">        
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

        <nav class="menu header__menu">
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="{{ route('calculator', request()->route()->city) }}" class="text menu__item">Калькулятор</a>
            </div>
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="{{ route('services', request()->route()->city) }}" class="text menu__item">Услуги</a>
            </div>
            <a href="{{ route('promos', request()->route()->city) }}" class="text menu__item">Скидки</a>
            <a href="{{ route('photos', request()->route()->city) }}" class="text menu__item">Фото</a>
            
            <div class="dropdown menu__item menu__item_dropdown">
                <a href="/asd" class="text menu__item">Информация</a>
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