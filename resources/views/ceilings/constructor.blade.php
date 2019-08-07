@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="constructor">
        @include('common.gui.titles', [
            'title' =>  "Визуализация потолков",
            'intro' =>  "Выберите цвет вашего потолка и посмотрите как это выглядит в интерьере при помощи конструктора."
        ])
        <iframe src="https://kuhni-ts.ru/kit-np/" width="100%" height="690" style="border: none;"></iframe> 
    </section>
    @include('common.gui.footer')
@endsection
