@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <section class="climatOrder climatOrder_ur">
        <div class="climatOrder__heading">
            <h2 class="climatOrder__title">Заказ № <span>9001</span></h2>
            <a href="javascript:void(0);" class="climatOrder__repeat">Заказать повторно</a>
        </div>
        <div class="climatOrder__content">
            <div class="climatOrder__info">
                <div class="climatOrder__order-info">
                    <dl class="climatOrder__date">
                        <dt>Дата формирования:</dt>
                        <dd>23.06.2017г</dd>
                    </dl>
                    <dl class="climatOrder__status">
                        <dt>Текущий статус:</dt>
                        <dd>Выполнен</dd>
                    </dl>
                    <dl class="climatOrder__summ">
                        <dt>Сумма к оплате:</dt>
                        <dd><span class="climatOrder__summ-val">180 090</span> ₽</dd>
                    </dl>
                    <dl class="climatOrder__pay">
                        <dt>Способ оплаты:</dt>
                        <dd>Visa / MasterCard</dd>
                    </dl>
                    <dl class="climatOrder__shipping">
                        <dt>Способ доставки:</dt>
                        <dd class="climatOrder__shipping-type">Грузовой компанией <span class="climatOrder__shipping-company">«Ратек»</span>   <p>Трек код:  <span class="climatOrder__track-number">КЕ3489756394</span></p></dd>
                    </dl>
                    <div class="climatOrder__ur-download">
                        <a href="javascript:void(0);" class="climatOrder__invoice"><img width='40' height='35' class="climatOrder__icon" src="/img/climat/invoice.svg" alt="">Скачать<br> накладную</a>
                        <a href="javascript:void(0);" class="climatOrder__invoice-facture"><img width='40' height='35' class="climatOrder__icon" src="/img/climat/invoiceFacture.svg" alt="">Скачать<br> счет-фактуру</a>
                    </div>
                </div>
                <div class="climatOrder__ur-info">
                    <dl class="climatOrder__persone">
                        <dt>Получатель:</dt>
                        <dd>Федоров Никита</dd>
                    </dl>
                    <dl class="climatOrder__tel">
                        <dt>Телефон:</dt>
                        <dd>+7 913 456-22-03</dd>
                    </dl>
                    <dl class="climatOrder__ur-type">
                        <dt>ООО</dt>
                        <dd>«Кондиционер-Компани»</dd>
                    </dl>
                    <dl class="climatOrder__ur-ogrn">
                        <dt>ОГРН:</dt>
                        <dd>2546245665</dd>
                    </dl>
                    <dl class="climatOrder__ur-inn">
                        <dt>ИНН:</dt>
                        <dd>2546245665</dd>
                    </dl>
                    <dl class="climatOrder__ur-bik">
                        <dt>БИК:</dt>
                        <dd>2546245665</dd>
                    </dl>
                    <dl class="climatOrder__ur-score">
                        <dt>Р/счет:</dt>
                        <dd>2546245665</dd>
                    </dl>
                </div>
            </div>
            <div class="climatOrder__list">
                <h3 class="climatOrder__list-title">Позиции сделанного заказа:</h3>
                @include('climat.orderingItem')
                @include('climat.orderingItem')
                @include('climat.orderingItem')
                @include('climat.orderingItem')
            </div>
            <div class="climatOrder__bottom">
                <dl class="climatOrder__total">
                    <dt>Итого к оплате с учетом вашей скидки 10%:</dt>
                    <dd><span>180 090</span> ₽</dd>
                </dl>
            </div>
        </div>
    </section>
@include('common.gui.footer')
@endsection
