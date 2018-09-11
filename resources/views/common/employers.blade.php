@extends('common.layout')

@section('content')
    @include('common.header')
    <section class="page__employers">
        <div class="container">
            <p class="overtitle">НАША КОМАНДА</p>
            <h1 class="title">Сотрудники компании Твой Стиль</h1>
            <p class="intro services__intro">
                В нашей компании работают только опытные сотрудники, которые постоянно проходят курсы повышения квалификации. Весь штат работников имеет не один год практики в производстве и монтаже натяжных потолков любой сложности
            </p>
        </div>
        <section class="employers">
            <div class="container">
                <div class="page__inner">
                    <div class="employers__switcher">
                        <div class="switcher">
                            <button type="button" data-type="all" id="all" class="switcher__button employers__btn switcher__button_active">Все</button>
                            <button type="button" data-type="administration" id="administration" class="switcher__button  employers__btn">Администрация</button>
                            <button type="button" data-type="management" id="management" class="switcher__button employers__btn">Менеджеры</button>
                            <button type="button" data-type="install" id="install" class="switcher__button employers__btn">Монтажники</button>
                        </div>
                    </div>
                    <div class="employers__content" id="employers-ajax-content">
                        @include('common.emplyee-card')
                        @include('common.emplyee-card')
                        @include('common.emplyee-card')
                        @include('common.emplyee-card')
                        @include('common.emplyee-card')
                        @include('common.emplyee-card')
                        @include('common.emplyee-card')
                        <a href="javascript:void(0);" class="employers__additionally">
                            <div class="employers__additionally-content">
                                <h2>Вакансии</h2>
                                <p>Мечтаете о работе в крупной и стабильной компании? Считаете себя профессионалом своего дела? Тогда именно для вас мы открываем дополнительные вакансии в нашем представительстве в городе Сочи</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @include('common.masters-services')
    </section>
    @include('common.footer')
@endsection
