<header class="header container">
    <div class="header__top">
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
    </div>
    <div class="header__bottom">
        <div class="header__offices dropdown">
            <a class="dropdown__item dropdown__item_active"><i class="arrow arrow_down dropdown__arrow"></i> Владивосток, Запорожская, 77</a>

        </div>
    </div>    
</header>