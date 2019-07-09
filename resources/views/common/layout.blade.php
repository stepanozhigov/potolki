<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="8c911b1b9e11ff6f" />
    <link onload="if(media!='all') media='all'" rel="stylesheet" href="{{ Asset('/css/app.css') }}">
    <link rel="canonical" href="{{ url(Request::url()) }}" />
    <? $visit = new App\Visit; ?>
    @if (!empty($seoData))
        <title>{!! str_replace('#city_title#', $city->name_formatted, $seoData->meta_title) !!}</title>
        <meta name="description" content="{!! str_replace('#city_title#', $city->name_formatted, $seoData->meta_description) !!}" />
    @else
        <title>Твой стиль</title>
    @endif

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
             fbq('init', '251910762414514');
             fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=251910762414514&ev=PageView&noscript=1"
            /></noscript>
<!-- End Facebook Pixel Code -->

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

    <meta name="google-site-verification" content="3k4jsA6Udh8M63iZf2je_vnH-XIkPEeNSPeBe9BxxJ4" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85472546-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-85472546-5');
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
