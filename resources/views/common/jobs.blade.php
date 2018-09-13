@extends('common.layout')

@section('content')
    @include('common.header')

    <div class="page__jobs">
        <div class="container">
            <p class="overtitle">ВАКАНСИИ В <span>СОЧИ</span></p>
            <h1 class="title">Работа в компании "Твой стиль" в <span>Сочи</span></h1>
            <p class="intro">
                Мечтаете о работе в крупной и стабильной компании? Считаете себя профессионалом своего дела? Тогда именно для Вас мы открываем дополнительные вакансии в нашем представительстве в городе Сочи. Сейчас в нашем представительстве в Сочи открыты следующие вакансии:
            </p>
            <div class="page__inner">
                <section class="jobs">
                    <div class="jobs__switcher">
                        <div class="switcher">
                            <button type="button" data-type="install" id="install" class="switcher__button jobs__btn switcher__button_active">Монтаж</button>
                            <button type="button" data-type="production" id="production" class="switcher__button  jobs__btn">Производство</button>
                            <button type="button" data-type="management" id="management" class="switcher__button jobs__btn">Менеджмент</button>
                            <button type="button" data-type="administration" id="administration" class="switcher__button jobs__btn">Администрация</button>
                        </div>
                    </div>
                    <div class="jobs__content" id="jobs-ajax-content">
                        <section class="jobs__card">
                            <h2>Менеджер</h2>
                            <p>Замеры, составление договоров, пластиковых конструкций, монтаж натяжных потолков, установка корпусной мебели, установка кондиционеров.</p>
                        </section>
                        <section class="jobs__card">
                            <h2>Технолог-замерщик по корпусной мебели</h2>
                            <p></p>
                        </section>
                        <section class="jobs__card">
                            <h2>Монтажник натяжных потолков</h2>
                            <p></p>
                        </section>
                        <section class="jobs__card">
                            <h2>Монтажник оконных конструкций</h2>
                            <p></p>
                        </section>
                    </div>
                    <a href="anketa.html" class="jobs__link">Заполнить анкету</a>
                </section>
            </div>
        </div>

    </div>
    @include('common.footer')
@endsection
