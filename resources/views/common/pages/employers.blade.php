@extends('common.layout')
    @section('content')
    @include('common.gui.header')
        <section class="employees container">
            @include('common.gui.titles', [
                'overtitle' =>  'Наша команда',
                'title' =>  "Сотрудники компании Твой Стиль {$city->name_formatted}",
                'intro' =>  "В нашей компании работают только опытные сотрудники,
                            которые постоянно проходят курсы повышения квалификации.
                            Весь штат работников имеет не один год практики в производстве и монтаже натяжных потолков любой сложности"
            ])
            <div class="switcher employees__switcher">
                <a class="switcher__button switcher__button_active">Все</a>
                <a class="switcher__button">Администрация</a>
                <a class="switcher__button">Менеджеры</a>
                <a class="switcher__button">Монтажники</a>
            </div>
            <article class="employee employees__card">
                <img src="/img/emplyee.jpg" alt="" class="emplyee-card__image">
                <p class="card-title employee__title">МАСЕВИЧ МАРИНА ВИКТОРОВНА</p>
                <hr class="line employee__line">
                <p class="subtext employee__text">Быть руководителем такой стабильной и процветающей компании одно удовольствие!</p>
            </article>
            <article class="employee employees__card">
                <img src="/img/emplyee.jpg" alt="" class="emplyee-card__image">
                <p class="card-title employee__title">МАСЕВИЧ МАРИНА ВИКТОРОВНА</p>
                <hr class="line employee__line">
                <p class="subtext employee__text">Быть руководителем такой стабильной и процветающей компании одно удовольствие!</p>
            </article>
            <article class="employee employees__card">
                <img src="/img/emplyee.jpg" alt="" class="emplyee-card__image">
                <p class="card-title employee__title">МАСЕВИЧ МАРИНА ВИКТОРОВНА</p>
                <hr class="line employee__line">
                <p class="subtext employee__text">Быть руководителем такой стабильной и процветающей компании одно удовольствие!</p>
            </article>
            <article class="employee employees__card">
                <img src="/img/emplyee.jpg" alt="" class="emplyee-card__image">
                <p class="card-title employee__title">МАСЕВИЧ МАРИНА ВИКТОРОВНА</p>
                <hr class="line employee__line">
                <p class="subtext employee__text">Быть руководителем такой стабильной и процветающей компании одно удовольствие!</p>
            </article>

           
            <a href="javascript:void(0);" class="employees__additionally">
                <div class="employers__additionally-content">
                    <p class="card-title">Вакансии</h2>
                    <hr class="line">
                    <p class="subtext">Мечтаете о работе в крупной и стабильной компании? Считаете себя профессионалом своего дела? Тогда именно для вас мы открываем дополнительные вакансии в нашем представительстве в городе Сочи</p>
                </div>
            </a>
        </section>
    @include('common.gui.footer')
@endsection
