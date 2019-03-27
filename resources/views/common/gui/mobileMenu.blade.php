<nav class="mobileMenu" id="mobileMenu">
    <a class="mobileMenu__heading" href="{{ route('windows.main', $city) }}">
        <img class="mobileMenu__logo-icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
        <img class="mobileMenu__logo-text" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
    </a>
    <ul class="mobileMenu__list scrollable">
        <li class="mobileMenu__item mobileMenu__item_category">
            <div class="mobileMenu__item-category">
                <p>Калькулятор</p>
                <div class="mobileMenu__category">
                    <div class="mobileMenu__category-heading">
                        <a class="mobileMenu__link-prev" href="javascript:void(0);"></a>
                        <a class="mobileMenu__link-category" href="javascript:void(0);">Калькулятор</a>
                        <a class="mobileMenu__link-category mobileMenu__link-arrow" href="javascript:void(0);"></a>
                    </div>
                    <ul class="scrollable scrollable">
                        <li class="mobileMenu__item">
                            <a  href="{{ route('calculator', ['city' => $city, 'type' => 'okna']) }}">Окна</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a  href="{{ route('calculator', ['city' => $city, 'type' => 'balkony']) }}">Балконы</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="mobileMenu__item">
            <a  href="{{ route('services', [request()->route()->city, 'measurements']) }}">
                Бесплатный замер
            </a>
        </li>
        <li class="mobileMenu__item">
            <a  href="{{ route('promos', request()->route()->city) }}">
                Скидки
            </a>
        </li>
        <li class="mobileMenu__item">
            <a  href="{{ route('photos', request()->route()->city) }}">
                Фото
            </a>
        </li>
        <li class="mobileMenu__item">
            <a  href="{{ route('contacts', request()->route()->city) }}">
                Контакты
            </a>
        </li>
        <li class="mobileMenu__item mobileMenu__item_category">
            <div class="mobileMenu__item-category">
                <p>Информация</p>
                <div class="mobileMenu__category">
                    <div class="mobileMenu__category-heading">
                        <a class="mobileMenu__link-prev" href="javascript:void(0);"></a>
                        <a class="mobileMenu__link-category" href="javascript:void(0);">Информация</a>
                        <a class="mobileMenu__link-category mobileMenu__link-arrow" href="javascript:void(0);"></a>
                    </div>
                    <ul class="scrollable">
                        <li class="mobileMenu__item">
                            <a  href="{{ route('services', request()->route()->city) }}">Услуги</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('about', request()->route()->city) }}">О компании</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('employees', request()->route()->city) }}">Сотрудники</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('vacancies', request()->route()->city) }}">Вакансии</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('questions', request()->route()->city) }}">Вопрос-ответ</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('articles', request()->route()->city) }}">Статьи</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('dirMessage', request()->route()->city) }}">Написать директору</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    <div class="mobileMenu__social socials">
        <a target="_blank" href="https://www.instagram.com/business_repin/" class="socials__item">
            <div class="socials__icon socials__icon_inst"></div>
        </a>
        <a target="_blank" href="https://vk.com/business.repin" class="socials__item">
            <div class="socials__icon socials__icon_fb"></div>
        </a>
        <a target="_blank" href="https://vk.com/business.repin" class="socials__item">
            <div class="socials__icon socials__icon_vk"></div>
        </a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=79996516666" class="socials__item">
            <div class="socials__icon socials__icon_ok"></div>
        </a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=79996516666" class="socials__item">
            <div class="socials__icon socials__icon_youtube"></div>
        </a>
    </div>
</nav>
