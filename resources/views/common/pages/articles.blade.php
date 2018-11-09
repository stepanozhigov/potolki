@extends('common.layout')
@section('content')
    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container',
        'overtitle' =>  'Статьи',
        'title' =>  'Полезная информация о пластиковых окнах'
    ])
    
    <div class="articles container">
        @foreach ($articles as $article)
            <div class="article b-card articles__item" style="background-image: url({{ Storage::url($article->preview_img) }}); @if($article->width) width: {{ $article->width }}%;  @endif">
                <p class="text article__title">{{ $article->title }}</p>
                <p class="text article__intro">{{ $article->preview_text }}</p>
                <a class="link subtext article__link">Читать далее</a>
            </div>
        @endforeach
    </div>

    @include('common.gui.footer')
@endsection