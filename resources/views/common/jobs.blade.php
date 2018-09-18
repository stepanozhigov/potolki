@extends('common.layout')

@section('content')
    @include('common.header')

        <section class="jobs container">
            @include('common.gui.titles', [
                'overtitle' =>  "вакансии",
                'title' =>  "Работа в компании Твой стиль {$city->name_formatted}",
                'intro' =>  "Мечтаете о работе в крупной и стабильной компании?
                            Считаете себя профессионалом своего дела?
                            Тогда именно для Вас мы открываем дополнительные вакансии в нашем представительстве в городе {$city->name}.
                            Сейчас в нашем представительстве {$city->name_formatted} открыты следующие вакансии:"
            ])

            <div class="switcher jobs__switcher">
                <a class="switcher__button switcher__button_active">Монтаж</a>
                <a class="switcher__button">Производство</a>
                <a class="switcher__button">Менеджмент</a>
                <a class="switcher__button">Администрация</a>
            </div>
            <section class="jobs__card">
                <p class="card-title">Менеджер</p>
                <hr class="line">
                <p class="text">Замеры, составление договоров, пластиковых конструкций, монтаж натяжных потолков, установка корпусной мебели, установка кондиционеров.</p>
            </section>
        </section>
    @include('common.footer')
@endsection
