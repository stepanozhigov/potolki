<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ Asset('/css/app.css').'?='.time() }}">
    @if (!empty($seoData))
        <title>{!! str_replace('#city_title#', $city->name_formatted, $seoData->meta_title) !!}</title>
        <meta name="description" content="{!! str_replace('#city_title#', $city->name_formatted, $seoData->meta_description) !!}" />
    @else
        <title>Твой стиль</title>
    @endif
</head>
<body class="body">
    @yield('content')
</body>
<script src="{{ Asset('/js/app.js').'?='.time() }}"></script>
</html>