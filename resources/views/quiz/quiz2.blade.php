<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Квиз опрос. Твой стиль</title>
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet">
    
    <? if (!empty($city)): ?>
		<script type="text/javascript">
            window.city = <?= json_encode($city) ?>
		</script>
	<? endif ?>
</head>
<body>
	<? $visit = new App\Visit; ?>
    
    <div id="app">
       <quiz></quiz>
    </div>

    <script src="/js/quiz.js"></script>
    <!-- VK Pixel Code -->
    <script>
        var pixel;
        // вызовется после загрузки openapi.js
        window.vkAsyncInit = function() {
            pixel = new VK.Pixel('VK-RTRG-466585-h6dY2');
        }
    </script>
    <script src="//vk.com/js/api/openapi.js?159" async></script>

    <script>
        pixel.Hit();
    </script>

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
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1114291812076604&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

	<!-- Yandex.Metrika counter -->
	<script async type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(40202559, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:false, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/40202559" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85472546-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-85472546-4');
    </script>
	<script>
        (function(w, d, s, h, id) {
            w.roistatProjectId = id; w.roistatHost = h;
            var p = d.location.protocol == "https:" ? "https://" : "http://";
            var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
            var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
        })(window, document, 'script', 'cloud.roistat.com', '9fcae1a19bf23011571b33710b6573d5');
	</script>
    @include('quiz.svg_sprite_quiz')
</body>
</html>