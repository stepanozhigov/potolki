@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="catalogueDetail catalogueDetail_surfaces">
        @include('common.gui.titles', [
            'overtitle' =>  'Каталог поверхностей',
            'class' =>  'container',
            'title' =>  "Фотопечать на поверхностях",
            'intro' =>  "Наш современный UV-принтер позволяет выполнять фотопечать не&nbsp;только на&nbsp;натяжных потолках, но&nbsp;и&nbsp;на&nbsp;других поверхностях. Освежите ваш старый ремонт или придайте яркости новому интерьеру, благодаря ультрафиолетовой печати."
        ])
        <div id="surfaces">
        	<surfaces :surfaces="{{ $surfaces }}"></surfaces>
    	</div>
        

    </section>
    @include('common.gui.footer')
@endsection
