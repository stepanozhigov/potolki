<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="6c7a8a6c99047a3c" />
    <meta name="cmsmagazine" content="eaf22e35ae274666a6d7cdb9ea04fe37" />
    <link onload="if(media!='all') media='all'" rel="stylesheet" href="{{ Asset('/css/app.css') }}">
    <link rel="canonical" href="{{ url(Request::url()) }}" />
    <? $visit = new App\Visit; ?>
    @if (!empty($seoData))
        <?
        $title = $seoData->meta_title;
        $desc = $seoData->meta_description;

        if (!empty($city)) {
            $title = str_replace('#city_title#', $city->name_formatted, $seoData->meta_title);
            $desc = str_replace('#city_title#', $city->name_formatted, $seoData->meta_description);
        }
        ?>
        <title>{!! $title !!}</title>
        <meta name="description" content="{!! $desc !!}" />
    @else 
        <title>Твой стиль</title>
    @endif

    <? if (!empty($city)): ?>
        <script type="text/javascript">
            window.city = <?= json_encode($city) ?>
        </script>
    <? endif ?>

    <!-- Carrot quest BEGIN -->
		<script type="text/javascript">
		!function(){function t(t,e){return function(){window.carrotquestasync.push(t,arguments)}}if("undefined"==typeof carrotquest){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//cdn.carrotquest.io/api.min.js",document.getElementsByTagName("head")[0].appendChild(e),window.carrotquest={},window.carrotquestasync=[],carrotquest.settings={};for(var n=["connect","track","identify","auth","oth","onReady","addCallback","removeCallback","trackMessageInteraction"],a=0;a<n.length;a++)carrotquest[n[a]]=t(n[a])}}(),carrotquest.connect("28264-15daed65704be963b84a4f77f5");
		</script>
	<!-- Carrot quest END -->
    
    <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1114291812076604');
        fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1114291812076604&ev=PageView&noscript=1"
      /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter40202559 = new Ya.Metrika2({ id:40202559, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/40202559" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85472546-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-871136207');
        gtag('config', 'UA-85472546-4');
    </script>

</head>
<body class="body">
    <div id="app">
        @yield('content')
    </div>
</body>

<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://bitrix-ts.ru/upload/crm/site_button/loader_1_82uuho.js');
</script>

<script async src="{{ Asset('/js/app.js') }}"></script>

</html>
