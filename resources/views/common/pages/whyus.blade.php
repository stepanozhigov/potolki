@extends('common.layout')

@section('content')
    @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  "Наши преимущества",
            'title' =>  "Звонят многим, заказывают у нас. Почему? ",
            'intro' =>  "Фабрика натяжных потолков «Твой стиль» основана в 2003 году является лидером
                        по производству и установке натяжных потолков на Дальнем Востоке."
        ])
        <section class="whyus">
            <div class="whyus__content">
                <div class="whyus__item">
                    <div class="whyus__item-info">
                        <h3 class="whyus__item-title">Собственное производство</h3>
                        <ul>
                            <li class="whyus__item-text">— Обеспечивает гарантию низкой цены</li>
                            <li class="whyus__item-text">— Снимает любые ограничения на цвет, конфигурацию и фактуру натяжного полотна</li>
                            <li class="whyus__item-text">— 549 вариантов фактур и оттенков</li>
                        </ul>
                    </div>
                    <img class="whyus__item-image" src="/img/img_factory.jpg" alt="Производство">
                </div>
                <div class="whyus__item whyus__item_reverse">
                    <div class="whyus__item-info">
                        <h3 class="whyus__item-title">Директор всегда на связи</h3>
                        <p class="whyus__item-text">
                            Я принимаю абсолютно все жалобы и предложения для улучшения качества работы и сервиса. В течении 24 часов ваше обращение будет мною рассмотрено и вы получите ответ.
                        </p>
                        <p class="whyus__item-text">
                            Вы можете использовать для связи привычную социальную сеть или
                            <a href="javascript:void(0);">форму обратной связи.</a>
                        </p>
                        <div class="whyus__social">
                            <a href="javascript:void(0);">
                                <img src="/img/gui/social_gray_inst.svg" alt="Инстаграм">
                            </a>
                            <a href="javascript:void(0);">
                                <img src="/img/gui/social_gray_fb.svg" alt="Фейсбук">
                            </a>
                            <a href="javascript:void(0);">
                                <img src="/img/gui/social_gray_vk.svg" alt="Вконтакте">
                            </a>
                        </div>
                    </div>
                    <img class="whyus__item-image" src="/img/img_director.jpg" alt="Директор">
                </div>
            </div>
            <div class="whyus__stat">
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">15</p>
                    <p class="whyus__stat-text">лет гарантия на наши потолки, с сервисным обсуживанием</p>
                </div>
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">3</p>
                    <p class="whyus__stat-text">часа устанавливается потолок площадью 16 квадратных метров</p>
                </div>
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">397</p>
                    <p class="whyus__stat-text">квадратных метров устанавливаем за день, это 26 910 в месяц</p>
                </div>
            </div>
            <div class="whyus__advantages">
                <div class="whyus__advantages-list">
                    <div class="whyus__advantages-item">
                        <img class="whyus__advantages-icon" src="/img/athome.svg" alt="Договор">
                        <p class="whyus__advantages-text">Договор и замер <br> на дому</p>
                    </div>
                    <div class="whyus__advantages-item">
                        <img class="whyus__advantages-icon" src="/img/colors.svg" alt="1548 цветов">
                        <p class="whyus__advantages-text">1548 цветов <br> плёнки</p>
                    </div>
                    <div class="whyus__advantages-item">
                        <img class="whyus__advantages-icon" src="/img/sertificates.svg" alt="Сертификаты">
                        <p class="whyus__advantages-text">Сертификаты <br> качества</p>
                    </div>
                    <div class="whyus__advantages-item">
                        <img class="whyus__advantages-icon" src="/img/pay.svg" alt="Рассрочка">
                        <p class="whyus__advantages-text">Рассрочка <br> экспресс</p>
                    </div>
                </div>
            </div>
            <div class="whyus__machine">
                <h3 class="whyus__title">Современный высокотехнологичный станок <br> для фотопечати DYSS Apollo GH 3200</h3>
                <p class="whyus__subtitle">Пьезоструйная УФ-печать с технологией переменного объема капли. Разрешение 1200х1270 dpi, 24 печатающие <br> головки, печать в 6 красок. Безупречное фотографическое качество отпечатка, экологичность, высокая <br> производительность и экономичность.</p>
                <img class="whyus__machine-img" src="/img/printer.png" alt="Принтер">
            </div>

        </section>
    @include('common.gui.footer')
@endsection
