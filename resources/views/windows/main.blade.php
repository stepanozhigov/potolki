@extends('common.layout')

@section('content')
    @include('common.header')

    <section class="main-offer">
        <div class="marin-offer__inner container">
            <p class="overtitle main-offer__overtitle">Уникальное предложение</p>
            <p class="title main-offer__title">Пластиковые окна со скидкой 30%</p>
            <p class="main-offer__subtitle subtitle">Для получения скидки оставьте заявку</p>

            <form class="form" action="">
                <input class="input main-offer__input" type="text"  placeholder="Ваше имя">
                <input class="input main-offer__input" type="tel"  placeholder="Ваш телефон">

                <button class="button button_red">Вызвать замерщика</button>

                <p class="form__agreement">Оставляя контактную информацию, Вы соглашаетесь на обработку персональных данных</p>
            </form>
        </div>
        
    </section>

    
@endsection