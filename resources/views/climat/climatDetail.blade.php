@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <section class="climatDetail">
        <div class="climatDetail__main">
            <div class="climatDetail__gallery">

            </div>
            <div class="climatDetail__info">

            </div>
        </div>
        <div class="climatDetail__additional">

        </div>
    </section>
    @include('common.gui.footer')
@endsection
