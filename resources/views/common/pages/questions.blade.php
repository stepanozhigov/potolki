@extends('common.layout')

@section('content')
    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container',
        'overtitle' =>  'Вопрос-ответ',
        'title' =>  "Ответы на часто задаваемые вопрос о пластиковых окнах {$city->name_formatted}",
        "intro" =>  'В этом разделе мы собрали ответы на самые популярные вопросы. А если вы не нашли интересующую вас информацию, наши менеджеры с удовольствием дадут вам полную консультацию.'
    ])

    <section class="questions container b-texture">
        <div class="questions__filter">
            <a href="{{ route('questions', request()->route()->city) }}" class="tag questions__tag">Все</a>    
            @foreach ($categories as $category)
                <a href="{{ route('questions', ['city' => request()->route()->city, 'code' => $category->code]) }}" class="tag questions__tag">{{ $category->name }}</a>    
            @endforeach
        </div>
        <div class="questions__content" id="questions-ajax-content">
            <section class="questions__card">
                <h2>Возможен ли монтаж натяжного потолка в комнате с печным отоплением, труба печки выложена из кирпича?</h2>
                <p>Да, возможен</p>
            </section>
            <section class="questions__card">
                <h2>Делает ли Ваша компания слив воды?</h2>
                <p>Да</p>
            </section>
            <section class="questions__card">
                <h2>Возможен ли монтаж натяжного потолка в комнате с печным отоплением, труба печки выложена из кирпича?</h2>
                <p>Да, возможен</p>
            </section>
            <section class="questions__card">
                <h2>Делает ли Ваша компания слив воды?</h2>
                <p>Да</p>
            </section>
            <section class="questions__card">
                <h2>Делает ли Ваша компания слив воды?</h2>
                <p>Да</p>
            </section>
            <section class="questions__card">
                <h2>Возможен ли монтаж натяжного потолка в комнате с печным отоплением, труба печки выложена из кирпича?</h2>
                <p>Да, возможен</p>
            </section>
            <section class="questions__card">
                <h2>Делает ли Ваша компания слив воды?</h2>
                <p>Да</p>
            </section>
        </div>
    </section>

    @include('common.gui.footer')
@endsection
