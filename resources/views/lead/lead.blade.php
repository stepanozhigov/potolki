@extends('lead.leadLayout')

@section('content')
    <div class="lead_page">
        <lead-page :city="{{$city}}" :name_formatted="'{!! $city->name_formatted !!}'"></lead-page>
    </div>
@endsection
