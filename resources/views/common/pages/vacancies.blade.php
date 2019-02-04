@extends('common.layout')

@section('content')
    @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  "вакансии",
            'title' =>  "Работа в компании «Твой стиль» {$city->name_formatted}",
            'intro' =>  "Мечтаете о&nbsp;работе в&nbsp;крупной и&nbsp;стабильной компании?
                        Считаете себя профессионалом своего дела?
                        Тогда именно для вас мы&nbsp;открываем дополнительные вакансии в&nbsp;нашем представительстве в&nbsp;городе {$city->name}.
                        Сейчас в&nbsp;нашем представительстве {$city->name_formatted} открыты следующие вакансии:"
        ])
        <section class="jobs container b-texture">
            <!--<div class="switcher jobs__switcher">
                <a class="switcher__button switcher__button_active">Монтаж</a>
                <a class="switcher__button">Производство</a>
                <a class="switcher__button">Менеджмент</a>
                <a class="switcher__button">Администрация</a>
            </div>-->
            @foreach($vacancies as $vacancy)
                <div class="jobs__card b-card">
                    <p class="card-title">{{ $vacancy->name }}</p>
                    <hr class="line">
                    <p class="text">{{ $vacancy->desc }}</p>
                </div>
            @endforeach
        </section>
    @include('common.gui.footer')
@endsection
