@extends('common.layout')

@section('content')
    @include('common.header')
    <section class="contacts">
        <div class="contacts__slider">
            <section class="contacts__slider-content">
                @include('common.contacts-сard')
                @include('common.contacts-сard')
            </section>
        </div>
        <div class="contacts__map">
            @include('common.map')
        </div>
    </section>
    @include('common.footer')
@endsection
