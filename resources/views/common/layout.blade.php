<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" content="{{ csrf_token() }}">
    <link onload="if(media!="all") media="all"" rel="stylesheet" href="{{ Asset('/css/app.css').'?='.time() }}">
    @if (!empty($seoData))
        <title>{!! str_replace('#city_title#', $city->name_formatted, $seoData->meta_title) !!}</title>
        <meta name="description" content="{!! str_replace('#city_title#', $city->name_formatted, $seoData->meta_description) !!}" />
    @else
        <title>Твой стиль</title>
    @endif

    <!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		   ym(43807824, "init", {
		        clickmap:true,
		        trackLinks:true,
		        accurateTrackBounce:true,
		        webvisor:true
		   });
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/43807824" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

</head>
<body class="body">
    @yield('content')
</body>
<script async src="{{ Asset('/js/app.js').'?='.time() }}"></script>
</html>
