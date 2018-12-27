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
            <a href="{{ route('questions', request()->route()->city) }}" class="tag questions__tag {{ $currentCategory ? '':'tag_active' }}">Все</a>
            @foreach ($categories as $category)
                <a href="{{ route('questions', ['city' => request()->route()->city, 'code' => $category->code]) }}" class="tag questions__tag {{ $category->name == ($currentCategory->name ?? null) ? 'tag_active':'' }}">{{ $category->name }}</a>
            @endforeach
        </div>
        <div class="questions__content" id="questions-ajax-content">
            @foreach ($questions as $question)
                <div class="questions__card question b-card">
                    <p class="second-title question__title">{{ $question->text }}</p>
                    <hr class="line">
                    <p class="text question__text">{{ $question->answer }}</p>
                    @if (strlen($question->answer) > 200)
                        <span class="question__more text" data-text="Свернуть описание">Подробнее</span>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    @include('common.gui.footer')
@endsection
