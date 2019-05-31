@extends('common.layout', ['seoData' => $seoData])

@section('content')
    <section class="serverError">
        <div class="serverError__content">
            <a href="{{ route('windows.main', $city) }}" class="logo">
                <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
                <img class="logo__text" src="/img/gui/logo-text_white.svg" alt="графема Твой Стиль">
            </a>
            <h1 class="serverError__name">500 Ошибка сервера</h1>
            <h2 class="serverError__title">Кажется что-то пошло не так</h2>
            <p class="serverError__desc">Приносим извинения, мы уже работаем над этим</p>
            <div class="serverError__actions">
                <p class="serverError__actions-title">Вы можете попробовать</p>
                <ul>
                    <li class="serverError__actions-item serverError__refresh">
                        <a class="serverError__refresh-link" href="javascript:void(0);">Обновить</a> страницу, иногда это помогает
                    </li>
                    <li class="serverError__actions-item serverError__wait">
                        Зайти снова через некоторое время
                    </li>
                    <li class="serverError__actions-item serverError__report">
                        <a href="javascript:void(0);">Пожаловаться</a> в нашу техподдержку
                    </li>
                    <li class="serverError__actions-item serverError__call">
                        Позвонить нам <a href="tel:8 800 333-97-14">8 800 333-97-14</a>
                    </li>
                    <li class="serverError__actions-item serverError__mail">
                        Или написать <a href="mailto:support@trend-p.ru">support@trend-p.ru</a>
                    </li>
                </ul>
            </div>

            <div class="socials socials_white serverError__socials">
                <a href="" class="socials__item red-hoverable">
    				<div class="socials__icon socials__icon_insta"></div>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_fb"></div>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_vk"></div>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_ok"></div>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_youtube"></div>
                </a>
            </div>
        </div>
    </section>
@endsection
