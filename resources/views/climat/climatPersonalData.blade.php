@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <section class="climatPersonalData">
        <div class="climatPersonalData__heading">
            <h1 class="climatPersonalData__title">Персональные данные</h1>
            <a href="javascript:void(0);" class="climatPersonalData__become-diller">Стать дилером</a>
        </div>
        <div class="climatPersonalData__content">
            <aside class="climatPersonalData__aside">
                <div class="climatPersonalData__avatar" style="background-image: url(http://www.ao-journal.ru/Portals/0/Images/authors/noavatar.png)">
                    <input type="file" name="loadAvatar" value="">
                </div>
                <label class="climatPersonalData__label">
                    <input class="climatPersonalData__checkbox" type="checkbox" name="ur" value="ur">
                    <span class="climatPersonalData__checkbox-custom"></span>
                    <p class="climatPersonalData__checkbox-name">Я представитель юридического лица</p>
                </label>
                <p class="climatPersonalData__personal-sale">Ваша скидка <span>10%</span></p>
                <p class="climatPersonalData__sale-info">Для скидки 15% - нужно чтобы сумма всех ваших заказов была больше 200 тр. Текущая сумма заказов = 173 700 р.</span></p>
                <button class="climatPersonalData__save" type="button" name="save">Сохранить данные</button>
            </aside>
            <div class="climatPersonalData__data">
                <div class="climatPersonalData__data-item climatPersonalData__contacts">
                    <h2 class="climatPersonalData__data-title">Контактные данные</h2>
                    <div class="climatPersonalData__data-content">
                        <input type="tel" name="tel" value="" placeholder="Телефон *">
                        <input type="email" name="mail" value="" placeholder="E-mail *">
                    </div>
                </div>
                <div class="climatPersonalData__data-item climatPersonalData__password">
                    <h2 class="climatPersonalData__data-title">Смена пароля</h2>
                    <div class="climatPersonalData__data-content">
                        <input type="password" name="newPass" value="" placeholder="Введите новый пароль">
                        <input type="password" name="oldPass" value="" placeholder="Повторите новый пароль">
                    </div>
                </div>
                <div class="climatPersonalData__data-item climatPersonalData__user">
                    <h2 class="climatPersonalData__data-title">Контактное лицо</h2>
                    <div class="climatPersonalData__data-content">
                        <input type="text" name="sername" value="" placeholder="Фамилия *">
                        <input type="text" name="name" value="" placeholder="Имя *">
                        <input type="text" name="patronymic" value="" placeholder="Отчество">
                    </div>
                </div>
                <div class="climatPersonalData__data-item climatPersonalData__adress">
                    <h2 class="climatPersonalData__data-title">Адреса доставки <a href="javascript:void(0);" data-src="#formAdressPopup" class="climatPersonalData__add js-show">Добавить</a></h2>
                    <div class="climatPersonalData__data-content">
                        <p class="climatPersonalData__data-adress">
                            Инд. 633011, Московская обл., Калуга, ул. Попова, д. 38/2, кв/оф. 3453
                            <button class="climatPersonalData__edit" type="button" name="button"><img src="/img/climat/edit.png" alt=""></button>
                            <button class="climatPersonalData__delite" type="button" name="button"></button>
                        </p>
                        <p class="climatPersonalData__data-adress">
                            Инд. 345467, Новосибирская обл., Искитим, ул. Римского-Корсакова, д. 38/2, кв/оф. 2
                            <button class="climatPersonalData__edit" type="button" name="button"><img src="/img/climat/edit.png" alt=""></button>
                            <button class="climatPersonalData__delite" type="button" name="button"></button>
                        </p>
                    </div>
                </div>
                <div class="climatPersonalData__data-item climatPersonalData__data-item_long climatPersonalData__ur">
                    <h2 class="climatPersonalData__data-title">Юридические лица <a href="javascript:void(0);" data-src="#formUrPopup" class="climatPersonalData__add js-show">Добавить</a></h2>
                    <div class="climatPersonalData__data-content">
                        <div class="climatPersonalData__data-ur">
                            <div class="climatPersonalData__ur-info">
                                <dl class="climatPersonalData__type">
                                    <dt>ООО</dt>
                                    <dd>"Кондиционер-Интернет-Компани"</dd>
                                </dl>
                                <dl class="climatPersonalData__ogrn">
                                    <dt>ОГРН:</dt>
                                    <dd>2546245665</dd>
                                </dl>
                                <dl class="climatPersonalData__inn">
                                    <dt>ИНН:</dt>
                                    <dd>123456789013452345</dd>
                                </dl>
                                <dl class="climatPersonalData__bik">
                                    <dt>БИК:</dt>
                                    <dd>1234567</dd>
                                </dl>
                                <dl class="climatPersonalData__account">
                                    <dt>Р/счет:</dt>
                                    <dd>123456789013452345</dd>
                                </dl>
                            </div>
                            <div class="climatPersonalData__ur-docs">
                                <dl class="climatPersonalData__docs">
                                    <dt>Документы:</dt>
                                    <dd>
                                        <a href="javascript:void(0);">Свидетельство.jpg</a>
                                        <a href="javascript:void(0);">Устав.jpg</a>
                                        <a href="javascript:void(0);">Лицензия.jpg</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <button class="climatPersonalData__edit" type="button" name="button"><img src="/img/climat/edit.png" alt=""></button>
                        <button class="climatPersonalData__delite" type="button" name="button"></button>
                    </div>
                    <div class="climatPersonalData__data-content">
                        <div class="climatPersonalData__data-ur">
                            <div class="climatPersonalData__ur-info">
                                <dl class="climatPersonalData__type">
                                    <dt>ООО</dt>
                                    <dd>"Кондиционер-Интернет-Компани"</dd>
                                </dl>
                                <dl class="climatPersonalData__ogrn">
                                    <dt>ОГРН:</dt>
                                    <dd>2546245665</dd>
                                </dl>
                                <dl class="climatPersonalData__inn">
                                    <dt>ИНН:</dt>
                                    <dd>123456789013452345</dd>
                                </dl>
                                <dl class="climatPersonalData__bik">
                                    <dt>БИК:</dt>
                                    <dd>1234567</dd>
                                </dl>
                                <dl class="climatPersonalData__account">
                                    <dt>Р/счет:</dt>
                                    <dd>123456789013452345</dd>
                                </dl>
                            </div>
                            <div class="climatPersonalData__ur-docs">
                                <dl class="climatPersonalData__docs">
                                    <dt>Документы:</dt>
                                    <dd>
                                        <a href="javascript:void(0);">Свидетельство.jpg</a>
                                        <a href="javascript:void(0);">Устав.jpg</a>
                                        <a href="javascript:void(0);">Лицензия.jpg</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <button class="climatPersonalData__edit" type="button" name="button"><img src="/img/climat/edit.png" alt=""></button>
                        <button class="climatPersonalData__delite" type="button" name="button"></button>
                    </div>
                    <div class="climatPersonalData__data-content">
                        <div class="climatPersonalData__data-ur">
                            <div class="climatPersonalData__ur-info">
                                <dl class="climatPersonalData__type">
                                    <dt>ООО</dt>
                                    <dd>"Кондиционер-Интернет-Компани"</dd>
                                </dl>
                                <dl class="climatPersonalData__ogrn">
                                    <dt>ОГРН:</dt>
                                    <dd>2546245665</dd>
                                </dl>
                                <dl class="climatPersonalData__inn">
                                    <dt>ИНН:</dt>
                                    <dd>123456789013452345</dd>
                                </dl>
                                <dl class="climatPersonalData__bik">
                                    <dt>БИК:</dt>
                                    <dd>1234567</dd>
                                </dl>
                                <dl class="climatPersonalData__account">
                                    <dt>Р/счет:</dt>
                                    <dd>123456789013452345</dd>
                                </dl>
                            </div>
                            <div class="climatPersonalData__ur-docs">
                                <dl class="climatPersonalData__docs">
                                    <dt>Документы:</dt>
                                    <dd>
                                        <a href="javascript:void(0);">Свидетельство.jpg</a>
                                        <a href="javascript:void(0);">Устав.jpg</a>
                                        <a href="javascript:void(0);">Лицензия.jpg</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <button class="climatPersonalData__edit" type="button" name="button"><img src="/img/climat/edit.png" alt=""></button>
                        <button class="climatPersonalData__delite" type="button" name="button"></button>
                    </div>
                </div>
                <p class="climatPersonalData__desc">Не забывайте нажать кнопку "Сохранить данные» в противном случае все изменения будут утеряны в том числе новое фото и пароль!</p>
            </div>
        </div>
    </section>


    @include('common.gui.footer')
@endsection
