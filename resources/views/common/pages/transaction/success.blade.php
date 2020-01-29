@extends('common.layout')
@section('content')
	@php
	$city = App\City::find(2);
	@endphp
    @include('common.gui.header')
    <section class="formPage formPage_sent">
		<div class="titles ">

            <h1 class="titles__title">Спасибо!<br> Оплата прошла успешно</h1>
			<a href="/sochi" class="button">Вернуться на сайт</a>
		</div>

    </section>
    @include('common.gui.footer')
@endsection
