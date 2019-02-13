@extends('common.layout')
@section('content')
    @include('common.gui.header')

    <div class="articles container" id="articles">
            @include('common.gui.titles', [
                'overtitle' =>  'Статьи и новости',
                'title' =>  "Полезная информация о пластиковых окнах",
                'intro' =>  "Больше полезной информации, конкурсы и&nbsp;розыгрыши <br> вы&nbsp;можете найти в&nbsp;наших социальных сетях:"
            ])
            <div class="socials articles__socials">
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_vk"></div>
                    <span class="socials__name text red-hoverable">Вконтакте</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_youtube"></div>
                    <span class="socials__name text red-hoverable">Одноклассники</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_fb"></div>
                    <span class="socials__name text red-hoverable">Facebook</span>
                </a>
                <a href="" class="socials__item red-hoverable">
                    <div class="socials__icon socials__icon_inst"></div>
                    <span class="socials__name text red-hoverable">Instagram</span>
                </a>
            </div>
            <posts :posts="{{ $articles }}"></posts>
            <!--<article class="ourArticle">
                <div class="ourArticle__gallery">
                    <img src="/img/ourArticle_1.png" class="ourArticle__img active" alt="">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img" alt="">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img" alt="">
                    <button class="ourArticle__gallery-prev"></button>
                    <button class="ourArticle__gallery-next"></button>
                    <div class="ourArticle__dots">
                        <button class="ourArticle__dot active"></button>
                        <button class="ourArticle__dot"></button>
                        <button class="ourArticle__dot"></button>
                    </div>
                </div>
                <div class="ourArticle__desc">
                    <h3>Сделать из лоджии личный кабинет или лаунж зону? Легко!</h3>
                    <p>Помимо производства и&nbsp;установки конструкций, мы&nbsp;можем эксклюзивно для вас составить дизайн-проект. А&nbsp;также дополнительно утеплить балкон, увеличить его площадь, провести освещение, установить тёплый пол и&nbsp;многое другое.</p>
                    <p>Сохраняйте пост в&nbsp;закладки, чтобы не&nbsp;потерять. Или закажите звонок в&nbsp;шапке нашего профиля @okna_vladivostok, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
                </div>
                <a data-src="#popup_articles" class="ourArticle__more js-show" href="javascript:void(0);">Подробнее</a>
            </article>
            <article class="ourArticle">
                <div class="ourArticle__gallery">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img active" alt="">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img" alt="">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img" alt="">
                    <button class="ourArticle__gallery-prev"></button>
                    <button class="ourArticle__gallery-next"></button>
                    <div class="ourArticle__dots">
                        <button class="ourArticle__dot active"></button>
                        <button class="ourArticle__dot"></button>
                        <button class="ourArticle__dot"></button>
                    </div>
                </div>
                <div class="ourArticle__desc">
                    <h3>Сделать из лоджии личный кабинет или лаунж зону? Легко!</h3>
                    <p>Помимо производства и&nbsp;установки конструкций, мы&nbsp;можем эксклюзивно для вас составить дизайн-проект. А&nbsp;также дополнительно утеплить балкон, увеличить его площадь, провести освещение, установить тёплый пол и&nbsp;многое другое.</p>
                    <p>Сохраняйте пост в&nbsp;закладки, чтобы не&nbsp;потерять. Или закажите звонок в&nbsp;шапке нашего профиля @okna_vladivostok, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
                </div>
                <a data-src="#popup_articles" class="ourArticle__more js-show" href="javascript:void(0);">Подробнее</a>
            </article>
            <article class="ourArticle">
                <div class="ourArticle__gallery">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img active" alt="">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img" alt="">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img" alt="">
                    <button class="ourArticle__gallery-prev"></button>
                    <button class="ourArticle__gallery-next"></button>
                    <div class="ourArticle__dots">
                        <button class="ourArticle__dot active"></button>
                        <button class="ourArticle__dot"></button>
                        <button class="ourArticle__dot"></button>
                    </div>
                </div>
                <div class="ourArticle__desc">
                    <h3>Сделать из лоджии личный кабинет или лаунж зону? Легко!</h3>
                    <p>Помимо производства и&nbsp;установки конструкций, мы&nbsp;можем эксклюзивно для вас составить дизайн-проект. А&nbsp;также дополнительно утеплить балкон, увеличить его площадь, провести освещение, установить тёплый пол и&nbsp;многое другое.</p>
                    <p>Сохраняйте пост в&nbsp;закладки, чтобы не&nbsp;потерять. Или закажите звонок в&nbsp;шапке нашего профиля @okna_vladivostok, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
                </div>
                <a data-src="#popup_articles" class="ourArticle__more js-show" href="javascript:void(0);">Подробнее</a>
            </article>

            <article class="ourArticle">
                <div class="ourArticle__gallery">
                    <img src="/img/ourArticle_4.png" class="ourArticle__img active" alt="">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img" alt="">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img" alt="">
                    <button class="ourArticle__gallery-prev"></button>
                    <button class="ourArticle__gallery-next"></button>
                    <div class="ourArticle__dots">
                        <button class="ourArticle__dot active"></button>
                        <button class="ourArticle__dot"></button>
                        <button class="ourArticle__dot"></button>
                    </div>
                </div>
                <div class="ourArticle__desc">
                    <h3>Сделать из лоджии личный кабинет или лаунж зону? Легко!</h3>
                    <p>Помимо производства и&nbsp;установки конструкций, мы&nbsp;можем эксклюзивно для вас составить дизайн-проект. А&nbsp;также дополнительно утеплить балкон, увеличить его площадь, провести освещение, установить тёплый пол и&nbsp;многое другое.</p>
                    <p>Сохраняйте пост в&nbsp;закладки, чтобы не&nbsp;потерять. Или закажите звонок в&nbsp;шапке нашего профиля @okna_vladivostok, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
                </div>
                <a data-src="#popup_articles" class="ourArticle__more js-show" href="javascript:void(0);">Подробнее</a>
            </article>
            <img src="/img/ourArticle_5.png" class="ourArticle__textimg" alt="">
            <article class="ourArticle">
                <div class="ourArticle__gallery">
                    <img src="/img/ourArticle_6.png" class="ourArticle__img active" alt="">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img" alt="">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img" alt="">
                    <button class="ourArticle__gallery-prev"></button>
                    <button class="ourArticle__gallery-next"></button>
                    <div class="ourArticle__dots">
                        <button class="ourArticle__dot active"></button>
                        <button class="ourArticle__dot"></button>
                        <button class="ourArticle__dot"></button>
                    </div>
                </div>
                <div class="ourArticle__desc">
                    <h3>Сделать из лоджии личный кабинет или лаунж зону? Легко!</h3>
                    <p>Помимо производства и&nbsp;установки конструкций, мы&nbsp;можем эксклюзивно для вас составить дизайн-проект. А&nbsp;также дополнительно утеплить балкон, увеличить его площадь, провести освещение, установить тёплый пол и&nbsp;многое другое.</p>
                    <p>Сохраняйте пост в&nbsp;закладки, чтобы не&nbsp;потерять. Или закажите звонок в&nbsp;шапке нашего профиля @okna_vladivostok, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
                </div>
                <a data-src="#popup_articles" class="ourArticle__more js-show" href="javascript:void(0);">Подробнее</a>
            </article>
            <article class="ourArticle">
                <div class="ourArticle__gallery">
                    <img src="/img/ourArticle_7.png" class="ourArticle__img active" alt="">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img" alt="">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img" alt="">
                    <button class="ourArticle__gallery-prev"></button>
                    <button class="ourArticle__gallery-next"></button>
                    <div class="ourArticle__dots">
                        <button class="ourArticle__dot active"></button>
                        <button class="ourArticle__dot"></button>
                        <button class="ourArticle__dot"></button>
                    </div>
                </div>
                <div class="ourArticle__desc">
                    <h3>Сделать из лоджии личный кабинет или лаунж зону? Легко!</h3>
                    <p>Помимо производства и&nbsp;установки конструкций, мы&nbsp;можем эксклюзивно для вас составить дизайн-проект. А&nbsp;также дополнительно утеплить балкон, увеличить его площадь, провести освещение, установить тёплый пол и&nbsp;многое другое.</p>
                    <p>Сохраняйте пост в&nbsp;закладки, чтобы не&nbsp;потерять. Или закажите звонок в&nbsp;шапке нашего профиля @okna_vladivostok, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
                </div>
                <a data-src="#popup_articles" class="ourArticle__more js-show" href="javascript:void(0);">Подробнее</a>
            </article>
            <article class="ourArticle">
                <div class="ourArticle__gallery">
                    <img src="/img/ourArticle_8.png" class="ourArticle__img active" alt="">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img" alt="">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img" alt="">
                    <button class="ourArticle__gallery-prev"></button>
                    <button class="ourArticle__gallery-next"></button>
                    <div class="ourArticle__dots">
                        <button class="ourArticle__dot active"></button>
                        <button class="ourArticle__dot"></button>
                        <button class="ourArticle__dot"></button>
                    </div>
                </div>
                <div class="ourArticle__desc">
                    <h3>Сделать из лоджии личный кабинет или лаунж зону? Легко!</h3>
                    <p>Помимо производства и&nbsp;установки конструкций, мы&nbsp;можем эксклюзивно для вас составить дизайн-проект. А&nbsp;также дополнительно утеплить балкон, увеличить его площадь, провести освещение, установить тёплый пол и&nbsp;многое другое.</p>
                    <p>Сохраняйте пост в&nbsp;закладки, чтобы не&nbsp;потерять. Или закажите звонок в&nbsp;шапке нашего профиля @okna_vladivostok, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
                </div>
                <a data-src="#popup_articles" class="ourArticle__more js-show" href="javascript:void(0);">Подробнее</a>
            </article>
            <article class="ourArticle">
                <div class="ourArticle__gallery">
                    <img src="/img/ourArticle_9.png" class="ourArticle__img active" alt="">
                    <img src="/img/ourArticle_2.png" class="ourArticle__img" alt="">
                    <img src="/img/ourArticle_3.png" class="ourArticle__img" alt="">
                    <button class="ourArticle__gallery-prev"></button>
                    <button class="ourArticle__gallery-next"></button>
                    <div class="ourArticle__dots">
                        <button class="ourArticle__dot active"></button>
                        <button class="ourArticle__dot"></button>
                        <button class="ourArticle__dot"></button>
                    </div>
                </div>
                <div class="ourArticle__desc">
                    <h3>Сделать из лоджии личный кабинет или лаунж зону? Легко!</h3>
                    <p>Помимо производства и&nbsp;установки конструкций, мы&nbsp;можем эксклюзивно для вас составить дизайн-проект. А&nbsp;также дополнительно утеплить балкон, увеличить его площадь, провести освещение, установить тёплый пол и&nbsp;многое другое.</p>
                    <p>Сохраняйте пост в&nbsp;закладки, чтобы не&nbsp;потерять. Или закажите звонок в&nbsp;шапке нашего профиля @okna_vladivostok, и&nbsp;мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время.</p>
                </div>
                <a data-src="#popup_articles" class="ourArticle__more js-show" href="javascript:void(0);">Подробнее</a>
            </article>-->
    </div>

    @include('common.gui.footer')
@endsection
