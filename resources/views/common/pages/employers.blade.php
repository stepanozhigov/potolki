@extends('common.layout')
    @section('content')
    @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'Наша команда',
            'title' =>  "Сотрудники компании Твой Стиль {$city->name_formatted}",
            'intro' =>  "В нашей компании работают только опытные сотрудники,
                        которые постоянно проходят курсы повышения квалификации.
                        Весь штат работников имеет не один год практики в производстве и монтаже натяжных потолков любой сложности"
        ])
        <section class="employees container b-texture">
            <!--<div class="switcher employees__switcher">
                <a class="switcher__button switcher__button_active">Все</a>
                <a class="switcher__button">Администрация</a>
                <a class="switcher__button">Менеджеры</a>
                <a class="switcher__button">Монтажники</a>
            </div>-->
            @foreach ($employees as $employee)
                <div class="employee employees__card">
                    <img src="{{ Storage::url($employee->photo) }}" alt="" class="employee__image">
                    <p class="card-title employee__title">{{ $employee->fio }}</p>
                    <hr class="line employee__line">
                    <p class="subtext employee__text">{{ $employee->desc }}</p>
                </div>
            @endforeach
            
            
            <a href="javascript:void(0);" class="additionally employees__additionally">
                <p class="card-title additionally__title">Вакансии</h2>
                <hr class="line additionally__line">
                <p class="subtext subtext_white">Мечтаете о работе в крупной и стабильной компании? Считаете себя профессионалом своего дела? Тогда именно для вас мы открываем дополнительные вакансии в нашем представительстве в городе Сочи</p>
            </a>
        </section>
    @include('common.gui.footer')
@endsection
