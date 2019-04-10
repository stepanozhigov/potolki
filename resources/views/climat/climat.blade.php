@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')

    @include('common.gui.survey')

    @include('common.gui.footer')
@endsection
