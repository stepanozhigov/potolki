@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
	<form class="climatOrdering">
	    <h1 class="climatOrdering__title">Оформление заказа</h1>
	    <div class="climatOrdering__step climatOrdering__shipping-method climatOrdering__step-first active">
	        <h3 class="climatOrdering__subtitle"><span class="climatOrdering__cont-step">1 шаг </span>- <span class="climatOrdering__step-desc">Способ доставки:</span></h3>
	        <div class="climatOrdering__shipping-value active">
	            <div class="climatOrdering__shipping-content climatOrdering__pickup">
	                <label class="climatOrdering__label">
	                    <input class="climatOrdering__radio" type="radio" name="climatShipping" value="pickup" checked>
	                    <span class="climatOrdering__radio-custom"></span>
	                    <p class="climatOrdering__radio-name">Самовывоз из филиала в вашем городе.</p>
	                </label>
	                <div class="climatOrdering__data">
	                    <p>Филиал:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__select">
	                        <select class="" name="">
	                            <option value="Vladivostok">Владивосток, ул. Запорожская 77</option>
	                            <option value="Vladivostok">Владивосток, ул. Запорожская 77</option>
	                            <option value="Vladivostok">Владивосток, ул. Запорожская 77</option>
	                        </select>
	                    </div>
	                </div>
	                <p class="climatOrdering__price">Бесплатно</p>
	            </div>
	            <p class="climatOrdering__desc">
	                Выбрав этот вариант - вы сами забираете товар в пункте самовывоза!
	            </p>
	        </div>
	        <div class="climatOrdering__shipping-value">
	            <div class="climatOrdering__shipping-content climatOrdering__hand">
	                <label class="climatOrdering__label">
	                    <input class="climatOrdering__radio" type="radio" name="climatShipping" value="hand">
	                    <span class="climatOrdering__radio-custom"></span>
	                    <p class="climatOrdering__radio-name">Нашей службой в руки.</p>
	                </label>
	                <div class="climatOrdering__data climatOrdering__data-city">
	                    <p>Город:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__select">
	                        <select class="" name="">
	                            <option value="Vladivostok">Владивосток</option>
	                            <option value="Sochi">Сочи</option>
	                            <option value="Vladivostok">Владивосток</option>
	                            <option value="Sochi">Сочи</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="climatOrdering__data climatOrdering__data-district">
	                    <p>Район:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__select">
	                        <select class="" name="">
	                            <option value="leninsky">Ленинский</option>
	                            <option value="centr">Центральный</option>
	                            <option value="leninsky">Ленинский</option>
	                            <option value="centr">Центральный</option>
	                        </select>
	                    </div>
	                </div>
	                <p class="climatOrdering__price"><span>300</span> ₽</p>
	                <div class="climatOrdering__data climatOrdering__data-date">
	                    <p><span>Удобная</span> для вас <span>дата</span> доставки:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__date">
	                        <input type="date" name="dateshipping" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data climatOrdering__data-time">
	                    <p>Время:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__time">
	                        <input type="time" name="timeshipping" value="">
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="climatOrdering__shipping-value">
	            <div class="climatOrdering__shipping-content climatOrdering__transportation">
	                <label class="climatOrdering__label">
	                    <input class="climatOrdering__radio" type="radio" name="climatShipping" value="transportation">
	                    <span class="climatOrdering__radio-custom"></span>
	                    <p class="climatOrdering__radio-name">Грузовой компанией до вашего города.</p>
	                </label>
	                <div class="climatOrdering__data">
	                    <p>Город:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__select">
	                        <select class="city" name="">
	                            <option value="Vladivostok">Владивосток</option>
	                            <option value="Sochi">Сочи</option>
	                            <option value="Vladivostok">Владивосток</option>
	                            <option value="Sochi">Сочи</option>
	                        </select>
	                    </div>
	                </div>
	                <p class="climatOrdering__price"><span>2590</span> ₽</p>
	            </div>
	            <p class="climatOrdering__desc">
	                При выборе этого варианта - монтаж мастерами будет невозможен! Выставленые галочки "Монтаж" - отменятся и сумма пересчетается.
	Также мы свяжемся с вами сразу же после оформления заказа для уточнения грузовой компании и методов упаковки.
	            </p>
	        </div>
	        <div class="climatOrdering__step-nav">
	            <button type="button" class="climatOrdering__prev">Назад</button>
	            <button type="button" class="climatOrdering__next">Далее</button>
	        </div>
	    </div>
	    <div class="climatOrdering__step climatOrdering__contacts climatOrdering__step-second">
	        <h3 class="climatOrdering__subtitle"> <span class="climatOrdering__cont-step">2 шаг</span> - <span class="climatOrdering__step-desc">Контактные данные и адрес доставки:</span></h3>
	        <div class="climatOrdering__mobile-autorize">
	            <p class="climatOrdering__mobile-text">Если уже совершали покупки у нас на сайте то нажмите «<span>Уже зарегистрирован</span>». В противном случае нажмите «<span>Впервые в вас</span>».</p>
	            <button type="button" class="climatOrdering__mobile-login">Уже зарегистрирован</button>
	            <button type="button" class="climatOrdering__mobile-register">Впервые у вас</button>
	            <button type="button" class="climatOrdering__mobile-prev">Назад</button>
	        </div>
	        <div class="climatOrdering__contacts-content climatOrdering__contacts-unlog active">
	            <div class="climatOrdering__contacts-data">
	                <p class="climatOrdering__contacts-title">Впервые у нас - тогда заполните следующие поля</p>
	                <div class="climatOrdering__contacts-wrap">
	                    <div class="climatOrdering__data">
	                        <p>Регион:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__region">
	                            <input type="text" name="region" value="">
	                        </div>
	                    </div>
						<div class="climatOrdering__data">
	                        <p>Фамилия:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__sername">
	                            <input type="text" name="sername" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Город:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__town">
	                            <input type="text" name="town" value="">
	                        </div>
	                    </div>
						<div class="climatOrdering__data">
	                        <p>Имя:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__name">
	                            <input type="text" name="name" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Улица:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__street">
	                            <input type="text" name="street" value="">
	                        </div>
	                    </div>
						<div class="climatOrdering__data">
	                        <p>Телефон:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__tel">
	                            <input type="tel" name="tel" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Дом | Корпус:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__house">
	                            <input type="number" name="house" value="">
	                        </div>
	                    </div>
						<div class="climatOrdering__data">
	                        <p>E-mail::</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__email">
	                            <input type="email" name="email" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Кв. | Офис:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__apartment">
	                            <input type="number" name="apartment" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Индекс:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__index">
	                            <input type="number" name="index" value="">
	                        </div>
	                    </div>




	                </div>
	            </div>
	            <p class="climatOrdering__contacts-text">или</p>
	            <div class="climatOrdering__contacts-login">
	                <p class="climatOrdering__contacts-title">если УЖЕ зарегестированы</p>
	                <div class="climatOrdering__contacts-wrap">
	                    <div class="climatOrdering__data">
	                        <p>E-mail:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__mail">
	                            <input type="email" name="mail" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Пароль:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__pass">
	                            <input type="password" name="pass" value="">
	                        </div>
	                    </div>
	                    <button class="climatOrdering__button-login" type="submit" name="button">Войти</button>
	                    <p class="climatOrdering__desc">
	                        Вам не нужно заполнять поля слева если вы уже совершали покупки у нас на сайте. В таком случае введите логин, пароль и нажмите войти.
	                    </p>
	                </div>
	            </div>
	        </div>
	        <div class="climatOrdering__contacts-content climatOrdering__contacts-log">
	            <div class="climatOrdering__personal-data">
	                <div class="climatOrdering__data">
	                    <p>Фамилия:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__sername">
	                        <input type="text" name="sername" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>Имя:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__name">
	                        <input type="text" name="name" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>Телефон:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__tel">
	                        <input type="tel" name="tel" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>E-mail:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__email">
	                        <input type="email" name="email" value="">
	                    </div>
	                </div>
	            </div>
	            <div class="climatOrdering__region-data">
	                <div class="climatOrdering__data">
	                    <p>Регион:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__region">
	                        <input type="text" name="region" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>Город:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__town">
	                        <input type="text" name="town" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>Улица:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__street">
	                        <input type="text" name="street" value="">
	                    </div>
	                </div>
	            </div>
	            <div class="climatOrdering__adress-data">
	                <div class="climatOrdering__data">
	                    <p>Дом | Корпус:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__house">
	                        <input type="number" name="house" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>Кв. | Офис:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__apartment">
	                        <input type="number" name="apartment" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>Индекс:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__index">
	                        <input type="number" name="index" value="">
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="climatOrdering__contacts-content climatOrdering__contacts-ur">
	            <div class="climatOrdering__ur-info">
	                <div class="climatOrdering__personal-data">
	                    <div class="climatOrdering__data">
	                        <p>Фамилия:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__sername">
	                            <input type="text" name="sername" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Имя:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__name">
	                            <input type="text" name="name" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Телефон:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__tel">
	                            <input type="tel" name="tel" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>E-mail:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__email">
	                            <input type="email" name="email" value="">
	                        </div>
	                    </div>
	                </div>
	                <div class="climatOrdering__region-data">
	                    <div class="climatOrdering__data">
	                        <p>Регион:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__region">
	                            <input type="text" name="region" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Город:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__town">
	                            <input type="text" name="town" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Улица:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__street">
	                            <input type="text" name="street" value="">
	                        </div>
	                    </div>
	                </div>
	                <div class="climatOrdering__adress-data">
	                    <div class="climatOrdering__data">
	                        <p>Дом | Корпус:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__house">
	                            <input type="number" name="house" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Кв. | Офис:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__apartment">
	                            <input type="number" name="apartment" value="">
	                        </div>
	                    </div>
	                    <div class="climatOrdering__data">
	                        <p>Индекс:</p>
	                        <div class="climatOrdering__data-wrap climatOrdering__index">
	                            <input type="number" name="index" value="">
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="climatOrdering__ur-data">
	                <div class="climatOrdering__data">
	                    <p>Тип:</p>
	                    <div class="climatOrdering__data-wrap climatOrdering__select">
	                        <select class="type" name="">
	                            <option value="OOO">OOO</option>
	                            <option value="ZAO">ЗАО</option>
	                            <option value="IP">ИП</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>БИК:</p>
	                    <div class="climatOrdering__data-wrap">
	                        <input type="number" name="bik" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>Название:</p>
	                    <div class="climatOrdering__data-wrap">
	                        <input type="text" name="urname" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>Р / счет:</p>
	                    <div class="climatOrdering__data-wrap">
	                        <input type="number" name="account" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>ОГРН:</p>
	                    <div class="climatOrdering__data-wrap">
	                        <input type="number" name="ogrn" value="">
	                    </div>
	                </div>
	                <div class="climatOrdering__data">
	                    <p>ИНН:</p>
	                    <div class="climatOrdering__data-wrap">
	                        <input type="number" name="inn" value="">
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="climatOrdering__step-nav">
	            <button type="button" class="climatOrdering__prev">Назад</button>
	            <button type="button" class="climatOrdering__next">Далее</button>
	        </div>
	    </div>
	    <div class="climatOrdering__step climatOrdering__contacts climatOrdering__step-third">
	        <h3 class="climatOrdering__subtitle"><span class="climatOrdering__cont-step">3 шаг</span> - <span class="climatOrdering__step-desc">Способ оплаты:</span></h3>
	        <div class="climatOrdering__paying-value">
	            <div class="climatOrdering__paying-content climatOrdering__transfer">
	                <label class="climatOrdering__label">
	                    <input class="climatOrdering__radio" type="radio" name="climatPaying" value="transfer">
	                    <span class="climatOrdering__radio-custom"></span>
	                    <p class="climatOrdering__radio-name">Банковским переводом <br>на расчетный счет
	                        <img src="/img/climat/transfer.png" alt="">
	                    </p>
	                </label>
	                <p class="climatOrdering__desc">
	                    Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты.
	                </p>
	                <a href="javascript:void(0);" class="climatOrdering__more">Читать описание</a>
	            </div>
	        </div>
	        <div class="climatOrdering__paying-value active">
	            <div class="climatOrdering__paying-content climatOrdering__visa">
	                <label class="climatOrdering__label">
	                    <input class="climatOrdering__radio" type="radio" name="climatPaying" value="visa" checked>
	                    <span class="climatOrdering__radio-custom"></span>
	                    <p class="climatOrdering__radio-name">Visa   |   MasterCard
	                        <img src="/img/climat/visa.png" alt="">
	                    </p>
	                </label>
	                <p class="climatOrdering__desc">
	                    Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты.
	                </p>
	                <a href="javascript:void(0);" class="climatOrdering__more">Читать описание</a>
	            </div>
	        </div>
	        <div class="climatOrdering__paying-value">
	            <div class="climatOrdering__paying-content climatOrdering__visa">
	                <label class="climatOrdering__label">
	                    <input class="climatOrdering__radio" type="radio" name="climatPaying" value="qiwi">
	                    <span class="climatOrdering__radio-custom"></span>
	                    <p class="climatOrdering__radio-name">Qiwi   |   Яндекс деньги
	                        <img src="/img/climat/qiwi.png" alt="">
	                    </p>
	                </label>
	                <p class="climatOrdering__desc">
	                    Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты.
	                </p>
	                <a href="javascript:void(0);" class="climatOrdering__more">Читать описание</a>
	            </div>
	        </div>
	        <div class="climatOrdering__paying-value">
	            <div class="climatOrdering__paying-content climatOrdering__visa">
	                <label class="climatOrdering__label">
	                    <input class="climatOrdering__radio" type="radio" name="climatPaying" value="getting">
	                    <span class="climatOrdering__radio-custom"></span>
	                    <p class="climatOrdering__radio-name">При получении заказа
	                        <img src="/img/climat/getting.png" alt="">
	                    </p>
	                </label>
	                <p class="climatOrdering__desc">
	                    Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты.
	                </p>
	                <a href="javascript:void(0);" class="climatOrdering__more">Читать описание</a>
	            </div>
	        </div>
	        <div class="climatOrdering__paying-value">
	            <div class="climatOrdering__paying-content climatOrdering__visa">
	                <label class="climatOrdering__label">
	                    <input class="climatOrdering__radio" type="radio" name="climatPaying" value="office">
	                    <span class="climatOrdering__radio-custom"></span>
	                    <p class="climatOrdering__radio-name">Предоплата в офисе
	                        <img src="/img/climat/office.png" alt="">
	                    </p>
	                </label>
	                <p class="climatOrdering__desc">
	                    Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты. Как и что для этого нужно и какая будет коммисия. Описание данног метода оплаты.
	                </p>
	                <a href="javascript:void(0);" class="climatOrdering__more">Читать описание</a>
	            </div>
	        </div>
	        <div class="climatOrdering__step-nav">
	            <button type="button" class="climatOrdering__prev">Назад</button>
	            <button type="button" class="climatOrdering__next">Далее</button>
	        </div>
	    </div>
		<div class="climatOrdering__step climatOrdering__contacts climatOrdering__step-fourth">
	        <h3 class="climatOrdering__subtitle"><span class="climatOrdering__cont-step">4 шаг</span> - <span class="climatOrdering__step-desc">Проверьте содержимое заказа:</span></h3>
			<div class="climatOrdering__list">
					@include('climat.orderingItem')
					@include('climat.orderingItem')
					@include('climat.orderingItem')
					@include('climat.orderingItem')
			</div>
	        <div class="climatOrdering__payment">
	            <div class="climatOrdering__ordering-info">
	                <textarea name="comment" placeholder="Комментарий к заказу (не обязательно)"></textarea>
	                <dl>
	                    <dt>Политика возврата:</dt>
	                    <dd>Возврату подлежат товары такие-то и такие-то. Возврату подлежат товары такие-то и такие-то. Возврату подлежат товары такие-то и такие-то. Возврату подлежат товары такие-то и такие-то. </dd>
	                </dl>
	            </div>
	            <div class="climatOrdering__total">
	                <dl>
	                    <dt>Суммарная стоимость товаров:</dt>
	                    <dd><span>217 950</span> ₽</dd>
	                </dl>
	                <dl>
	                    <dt>Стоимость все монтажных работ:</dt>
	                    <dd><span>16 500</span> ₽</dd>
	                </dl>
	                <dl>
	                    <dt>Доставка курьером (Владивосток, Ленинский р-он):</dt>
	                    <dd><span>900</span> ₽</dd>
	                </dl>
	                <dl>
	                    <dt>Итого к оплате с учетом вашей скидки 10%:</dt>
	                    <dd><span>180 090</span> ₽</dd>
	                </dl>
	                <button type="submit" class="climatOrdering__pay">Оплатить заказ</button>
	            </div>
	        </div>
	        <div class="climatOrdering__step-nav">
	            <button type="button" class="climatOrdering__prev">Назад</button>
	            <button type="button" class="climatOrdering__next">Далее</button>
	        </div>
	    </div>
	</form>

	@include('common.gui.survey')
@include('common.gui.footer')
@endsection
