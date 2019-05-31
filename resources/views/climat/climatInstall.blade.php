@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <div id="climat-slider">
        <climat-slider ></climat-slider>
    </div>
    <section class="climatInstall">
        @include('common.gui.titles', [
            'class' =>  "container",
            'overtitle' =>  'стоимость',
            'title' =>  "Установка кондиционеров",
            'intro' =>  "После того как вы&nbsp;приобрели кондиционер, закажите установку кондиционера в&nbsp;нашем сервисном центре. Монтаж кондиционера в&nbsp;Сочи желательно заказать в&nbsp;нашей компании или у&nbsp;наших партнеров, чтобы получить дополнительную гарантию. Вызовите мастера по&nbsp;телефону 8&nbsp;800&nbsp;222&mdash;11&mdash;97 или оставьте заявку."
        ])
        <div class="climatInstall__discount">
            <p>Нашли дешевле?</p>
            <img src="/img/climat/discount.jpg" alt="">
            <p>Сделаем скидку!</p>
        </div>
        <div class="climatInstall__price">
            <h2 class="climatInstall__price-title">Стоимость установки кондиционера</h2>
            <div class="climatInstall__price-content">
                <h3 class="climatInstall__price-subtitle">Стандартный монтаж кондиционера</h3>
                <p class="climatInstall__price-desc">Длина трассы кондиционера до&nbsp;3&nbsp;метров. Трасса внутри помещения закрывается коробом белого цвета.&nbsp;1&nbsp;отверстие в&nbsp;стене. Внешний блок кондиционера устанавливается под окном. Выезд и&nbsp;доставка&nbsp;&mdash; бесплатно!</p>
                <div class="climatInstall__price-list">
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж 07 модели</dt>
                        <dd>6 300 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж 09 модели</dt>
                        <dd>6 600 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж 12 модели</dt>
                        <dd>7 000 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж 18 модели</dt>
                        <dd>9 000 ₽</dd>
                    </dl>
                </div>
                <div class="climatInstall__price-list">
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж 24 модели</dt>
                        <dd>10 500 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж 30 модели</dt>
                        <dd>12 000 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж 36 модели</dt>
                        <dd>14 000 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж 46 модели</dt>
                        <dd>16 000 ₽</dd>
                    </dl>
                </div>
                <h3 class="climatInstall__price-subtitle">Дополнительные работы</h3>
                <div class="climatInstall__price-list">
                    <dl class="climatInstall__price-item">
                        <dt>Бурение отверстий</dt>
                        <dd>500 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Выезд монтажной бригады</dt>
                        <dd>500 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Демонтаж, монтаж стеклопакета</dt>
                        <dd>500 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж зимнего комплекта</dt>
                        <dd>8 000 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж кабель-канала</dt>
                        <dd>200 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж с лестницы</dt>
                        <dd>1 000 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж электрокабеля</dt>
                        <dd>200 ₽/п. м</dd>
                    </dl>
                </div>
                <div class="climatInstall__price-list">
                    <dl class="climatInstall__price-item">
                        <dt>Пайка медных труб</dt>
                        <dd>1 000 ₽/шт.</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Подъем на этаж, выше пятого этажа</dt>
                        <dd>50 ₽/этаж</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Работа альпиниста</dt>
                        <dd>6 000 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Услуги автовышки</dt>
                        <dd>1 000 ₽</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Штробление бетона</dt>
                        <dd>800 ₽/п. м</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Штробление кирпича</dt>
                        <dd>500 ₽/п. м</dd>
                    </dl>
                    <dl class="climatInstall__price-item">
                        <dt>Монтаж трассы больше 3 метров</dt>
                        <dd>от 500 ₽/м</dd>
                    </dl>
                </div>
                <div class="climatInstall__price-install">
                    <p>Установка кондиционера занимает в среднем 3 часа</p>
                    <p>Гарантия на все работы 1 год</p>
                </div>
            </div>
            <p class="climatInstall__price-desc">Закажите звонок и&nbsp;вы&nbsp;получите профессиональную консультацию в&nbsp;выборе кондиционера и&nbsp;стоимости его установки.</p>
            <a data-src="#popup_callback" class="climatInstall__callback js-show" href="javascript:void(0);">Заказать звонок</a>
        </div>
        @include('climat.climatPhoto')
        <div class="climatInstall__video">
            <h2 class="climatInstall__video-title">Стандартный монтаж кондиционера</h2>
            <iframe width="780" height="480" src="https://www.youtube.com/embed/ZzBDdgLxTxE?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p class="climatInstall__video-desc">В&nbsp;этом видео рассказывается о&nbsp;самой распространенной ситуации при монтаже кондиционера. Стандартная установка сплит системы под ключ. Базовый монтаж кондиционера Mitsubishi Electric MSZ-EF25VE. Особенности монтажа кондиционера в&nbsp;один этап.</p>
            <button class="climatInstall__video-arrow" type="button">
                <img src="/img/arrow-down.svg" alt="">
            </button>
        </div>
    </section>
    @include('common.gui.footer')
@endsection
