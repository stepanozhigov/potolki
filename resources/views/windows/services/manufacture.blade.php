@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container',
        'overtitle' =>  'Производство',
        'title' =>  "Изготовление пластиковых окон {$city->name_formatted}"
    ])

    <section class="service">
        <div class="service__texture">
            <div class="service__heading container">
                <div class="service__left">
                    <p class="intro service__intro">
                        Изготовление конструкций – важный этап на пути к надежным и качественным окнам. Ведь как бы ни был хорош специалист монтажа, если конструкция изначально не соответствует всем стандартам качества, Вы никогда не получите долговечные пластиковые окна.
                    </p>
                    <p class="intro service__intro">
                        Вот почему так важно доверять производство и установку пластиковых окон проверенным компаниям, которые зарекомендовали себя на рынке. Компания «Твой стиль» уверена в надежности своей продукции. Именно поэтому мы даем гарантию на выполненные работы сроком до 15-ти лет.
                    </p>
                </div>
                <img class="service__img" src="/img/windows/services/manufacturing.png" alt="Изготовление пластиковых окон">
            </div>            
        </div>
        
    </section>

    @include('common.gui.footer')

@endsection