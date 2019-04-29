@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <section class="climatMaintenance">
        <div class="climatMaintenance__heading">
            <h1 class="climatMaintenance__title">Сервисное обслуживание и Ремонт кондиционеров</h1>
            <p class="climatMaintenance__subtitle">Мы компания полного цикла - не только продаем и устанавливаем кондиционеры, но и помагаем нашим клиентом решить все повседневые трудности связанные с этой сложной современной техникой. Вовремя заменим расходники, почистим, отремонтируем и настроим все так чтобы у вас были только положительные эмоции от пользования этим чудом современости.</p>
        </div>
        <div class="climatMaintenance__content">
            <div class="climatMaintenance__content-heading">
                <p>Наиболее востребованные услуги</p>
                <p>Стоимость услуг</p>
                <p class="climatMaintenance__mobile-text">Стоимость популярных услуг</p>
            </div>
            <dl>
                <dt>Устранение течи фриона у внутреннего модуля</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Замена фильтров внутреннего модуля</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Настройка нового универсального пульта</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Новые подшибники на электромоторе (для тихой работы)</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Установка ветровых откосов</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Устранение течи фриона у внутреннего модуля</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Замена фильтров внутреннего модуля</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Настройка нового универсального пульта</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Новые подшибники на электромоторе (для тихой работы)</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Установка ветровых откосов</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Новые подшибники на электромоторе (для тихой работы)</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Установка ветровых откосов</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Устранение течи фриона у внутреннего модуля</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Замена фильтров внутреннего модуля</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Настройка нового универсального пульта</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Новые подшибники на электромоторе (для тихой работы)</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
            <dl>
                <dt>Установка ветровых откосов</dt>
                <dd><span>9000</span> ₽</dd>
            </dl>
        </div>
        <p class="climatMaintenance__conditions">
            В случае заказа ремонтно-заменных работ вне гарантийного случая - транспортные расходы расчитываются отдельно и суммируются со стоимостью самих услуг:
        </p>
        <div class="climatMaintenance__info">
            <div class="climatMaintenance__info-additional">
                <h2>Транспортные надбавки по Сочи</h2>
                <dl>
                    <dt>Центральный район:</dt>
                    <dd>1500р</dd>
                </dl>
                <dl>
                    <dt>Октябрьский, Мамайский, Лазоревский районы:</dt>
                    <dd>900р</dd>
                </dl>
                <dl>
                    <dt>Светлана, Хоста:</dt>
                    <dd>500р</dd>
                </dl>
                <dl>
                    <dt>Адлер, Имиритинская низменность:</dt>
                    <dd>2100р</dd>
                </dl>
                <dl>
                    <dt>Догамысский район:</dt>
                    <dd>190р</dd>
                </dl>
                <dl>
                    <dt>Роза Хутор:</dt>
                    <dd>9 000р</dd>
                </dl>
            </div>
            <div class="climatMaintenance__info-time">
                <h2>Время работы мастера в Сочи</h2>
                <dl>
                    <dt>Пн-Пт:</dt>
                    <dd>с 9:00 до 19:00 (без обеда)</dd>
                </dl>
                <dl>
                    <dt>Сб:</dt>
                    <dd>с 10:00 до 18:00 (без обеда)</dd>
                </dl>
                <dl>
                    <dt>Вс:</dt>
                    <dd>выходной</dd>
                </dl>
            </div>
        </div>

    </section>

    @include('common.gui.survey')
@include('common.gui.footer')
@endsection
