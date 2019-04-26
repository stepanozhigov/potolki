@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <section class="climatBasket">
        <div class="climatBasket__heading">
            <h1 class="climatBasket__title">Корзина товаров</h1>
        </div>
        <div class="climatBasket__content">
            @include('climat.orderingItem')
            @include('climat.orderingItem')
            @include('climat.orderingItem')
            @include('climat.orderingItem')
        </div>
        <div class="climatBasket__bottom-content">
            <dl>
                <dt>Итого к оплате с учетом вашей скидки 10%:</dt>
                <dd>180 090 ₽</dd>
            </dl>
            <p class="climatBasket__desc">Стоимость доставки расчитывается при оформлении заказа.</p>
            <a class="climatBasket__checkout" href="javascript:void(0);">Оформить заказ</a>
            <a class="climatBasket__help" href="javascript:void(0);">Помощь в выборе</a>
        </div>
    </section>
    @include('common.gui.survey')
@include('common.gui.footer')
@endsection
