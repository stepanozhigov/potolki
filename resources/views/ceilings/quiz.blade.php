@extends('common.layout')

@section('content')
    @include('common.gui.header')

    <main class="page" id="quiz">
        <quiz></quiz>
    </main>
    @include('common.gui.footer', ['skipOffer' => true])
@endsection
