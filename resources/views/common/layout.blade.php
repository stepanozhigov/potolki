<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="6c7a8a6c99047a3c" />
    <meta name="google-site-verification" content="9PMBsqLABSxa0ShPlCJmBj0DCnuCrxL4v_kFdn2hakY" />
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

	<script>
		console.log("<?= Request::ip() ?>");
	</script>

    <? if (!empty($city)): ?>
        <script type="text/javascript">
            window.city = <?= json_encode($city) ?>
        </script>
    <? endif ?>
    <?
    $route = request()->route();
    $req = !empty($route) ? $route->getName():''; ?>



    @if (request()->skip_scripts != '1')
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

   <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(40202559, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/40202559" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85472546-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-85472546-4');
    </script>


    @endif

</head>
<body class="body {{ strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ? 'webp' : '' }}">
    <? if (request()->path() !== '/' && $req !== 'quiz' && $req !== 'quiz2' && url()->previous() !== 'https://potolki-ts.ru/'): ?>
        <div id="geo-confirm">
            <geo-confirm :cities="{{ $cities }}"></geo-confirm>
        </div>
		<div id="widget">
			<widget></widget> 
		</div>
    <? endif ?>
    <div id="app">
        @yield('content')
    </div>

</body>

    <!-- Pixel -->
    @if ($city->bx_code === 528)
    
    <script type="text/javascript">
        (function (d, w) {
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
        })(document, window);
    </script>
    
    @endif
    <!-- /Pixel -->

<script async type="text/javascript">
    function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "/js/app.js";
        document.body.appendChild(element);
    }

    if (window.addEventListener) {
        window.addEventListener("load", downloadJSAtOnload, false);
    }
    else if (window.attachEvent) {
        window.attachEvent("onload", downloadJSAtOnload);
    }
    else {
        window.onload = downloadJSAtOnload;
    }
</script>

@if (request()->skip_scripts != '1')
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '9fcae1a19bf23011571b33710b6573d5');
</script>

@endif

@yield('scripts')
</html>
