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

    <? if (!empty($city)): ?>
        <script type="text/javascript">
            window.city = <?= json_encode($city) ?>
        </script>
    <? endif ?>
    <? $req = request()->route()->getName(); ?>

    @if ($req !== 'quiz')
    <!-- Carrot quest BEGIN -->
		<script type="text/javascript">
		!function(){function t(t,e){return function(){window.carrotquestasync.push(t,arguments)}}if("undefined"==typeof carrotquest){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//cdn.carrotquest.io/api.min.js",document.getElementsByTagName("head")[0].appendChild(e),window.carrotquest={},window.carrotquestasync=[],carrotquest.settings={};for(var n=["connect","track","identify","auth","oth","onReady","addCallback","removeCallback","trackMessageInteraction"],a=0;a<n.length;a++)carrotquest[n[a]]=t(n[a])}}(),carrotquest.connect("28264-15daed65704be963b84a4f77f5");
		</script>
	<!-- Carrot quest END -->
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
        gtag('config', 'AW-871136207');
        gtag('config', 'UA-85472546-4');
    </script>

</head>
<body class="body">
    
    <? if (request()->path() !== '/' && $req !== 'quiz'): ?> 
        <div id="geo-confirm">
            <geo-confirm :cities="{{ $cities }}"></geo-confirm>
        </div>
    <? endif ?>
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

<script type="text/javascript">
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

<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '9fcae1a19bf23011571b33710b6573d5');
</script>


<script>
    const DEBUG = false;

    const XML_HTTP_REQUEST_TIMEOUT = 5000;
    const PHONE_REGEXP = /^[8|7]?[8|9](\d){9}$/g;
    const EMAIL_REGEXP = /^[^\s]+[@][^\s]+$/g;
    const EXCLUDE_DOMAINS = {
        'mc.yandex.ru' : 1,
        'google-analytics.com' : 1,
        'google.ru' : 1,
        'google.com' : 1,
        'stats.g.doubleclick.net' : 1,
    };

    // XMLHttpRequest
    if (window.XMLHttpRequest) {
        // cache old XMLHttpRequest.send
        XMLHttpRequest.prototype.oldSend = XMLHttpRequest.prototype.send;

        function newSend(data) {
            var self = this;
            setTimeout(function () {
                collectData(self.responseURL, data)
            }, XML_HTTP_REQUEST_TIMEOUT);

            return this.oldSend(data);
        }

        // override XMLHttpRequest.send
        XMLHttpRequest.prototype.send = newSend;
    }

    // ActiveXObject
    if (window.ActiveXObject) {
        var ActualActiveXObject = ActiveXObject;

        // generate new ActiveXObject
        function ActiveXObject(progid) {
            var oldActiveXObject = new ActualActiveXObject(progid);
            var newActiveXObject = {};

            if (progid.toLowerCase() == "msxml2.xmlhttp") {
                newActiveXObject = {
                    _ax: oldActiveXObject,
                    _status: "fake",
                    responseText: "",
                    responseXml: null,
                    readyState: 0,
                    status: 0,
                    statusText: 0,
                    onReadyStateChange: null
                };

                var cachedUrl = '';

                newActiveXObject._onReadyStateChange = function () {
                    var self = newActiveXObject;

                    return function () {
                        self.readyState = self._ax.readyState;
                        if (self.readyState == 4) {
                            self.responseText = self._ax.responseText;
                            self.responseXml = self._ax.responseXml;
                            self.status = self._ax.status;
                            self.statusText = self._ax.statusText;
                        }
                        if (self.onReadyStateChange) self.onReadyStateChange();
                    }
                }();

                newActiveXObject.open = function (method, url, varAsync, user, password) {
                    cachedUrl = url;
                    varAsync = (varAsync !== false);
                    this._ax.onReadyStateChange = this._onReadyStateChange;
                    return this._ax.open(method, url, varAsync, user, password);
                };

                newActiveXObject.send = function (body) {
                    collectData(cachedUrl, body);

                    return this._ax.send(body);
                };
            } else {
                newActiveXObject = oldActiveXObject;
            }

            return newActiveXObject;
        }

        // override ActiveXObject
        window.ActiveXObject = ActiveXObject;
    }

    // Fetch
    if (window.fetch) {
        var oldFetch = fetch;

        fetch = function (request, data) {
            collectData(request.url, data || {});

            return oldFetch(request, data || {});
        }
    }

    // Listen submit event
    window.addEventListener('submit', function (event) {
        var elements = event.target.elements;
        var data = {};
        for (var i = 0; i < elements.length; i++) {
            var element = elements[i];
            var name = element.getAttribute('name');

            data[name] = element.value;
        }

        collectData('', data);
    });

    function parseQueryString(url) {
        var params = {};

        if (url.length === 0) {
            return params;
        }

        var urlAsArray = url.split('?');

        if (urlAsArray.length < 2) {
            return params;
        }

        var queryParams = urlAsArray[1];

        params = parseQueryParams(queryParams);

        return params;
    }

    function parseQueryParams(queryParams) {
        var queryParamsAsArray = queryParams.split('&'), params = {};
        for (var i = 0; i < queryParamsAsArray.length; i++) {
            var param = queryParamsAsArray[i].split('=');

            if (param.length < 2) {
                continue;
            }

            params[param[0]] = param[1];
        }

        return params;
    }

    function getClientInfoFromData(data) {
        var hasName = data.hasOwnProperty('name') || data.hasOwnProperty('Name') || data.hasOwnProperty('NAME');
        var hasEmail = data.hasOwnProperty('email') || data.hasOwnProperty('Email') || data.hasOwnProperty('EMAIL');
        var hasPhone = data.hasOwnProperty('phone') || data.hasOwnProperty('Phone') || data.hasOwnProperty('PHONE')
            || data.hasOwnProperty('tel') || data.hasOwnProperty('Tel') || data.hasOwnProperty('TEL');

        var newData = {
            email: hasEmail ? data.email || data.Email || data.EMAIL || data.tel || data.Tel || data.TEL : '',
            phone: hasPhone ? data.phone || data.Phone || data.PHONE : '',
            name: hasName ? data.name || data.Name || data.NAME : ''
        };

        if (DEBUG) {
            console.group('getClientInfoFromData - data before regexp parsing');
            console.log('data', newData);
            console.groupEnd('getClientInfoFromData - data before regexp parsing');
        }

        const isPhoneEmpty = newData.phone.length === 0;
        const isEmailEmpty = newData.email.length === 0;

        if (!isPhoneEmpty && !isEmailEmpty) {
            return newData;
        }

        var emailRegexp = new RegExp(EMAIL_REGEXP);
        var phoneRegexp = new RegExp(PHONE_REGEXP);
        var keys = Object.keys(data);

        for (var i = 0; i < keys.length; i++) {
            var value = String(data[keys[i]]);

            if (isEmailEmpty) {
                var matchedEmails = value.match(emailRegexp);
                if (matchedEmails && matchedEmails.length > 0) {
                    var oldEmail = newData.email;
                    newData.email = matchedEmails[0];

                    if (DEBUG) {
                        console.group('getClientInfoFromData - parsing email');
                        console.log('old email value', oldEmail);
                        console.log('new email value', newData.email);
                        console.groupEnd('getClientInfoFromData - parsing email');
                    }
                }
            }

            if (isPhoneEmpty) {
                var phoneValue = value.replace(/\D/gi, '');
                var matchedPhones = phoneValue.match(phoneRegexp);
                if (matchedPhones && matchedPhones.length > 0) {
                    var oldPhone = newData.phone;
                    newData.phone = value;

                    if (DEBUG) {
                        console.group('getClientInfoFromData - parsing phone');
                        console.log('old phone value', oldPhone);
                        console.log('new phone value', newData.phone);
                        console.groupEnd('getClientInfoFromData - parsing phone');
                    }
                }
            }
        }

        return newData;
    }

    // Data processing
    function collectData(url, body) {
        if (url.length > 0) {
            var keys = Object.keys(EXCLUDE_DOMAINS);
            for(var i = 0; i < keys.length; i++) {
                if (url.indexOf(keys[i]) !== -1) {
                    return;
                }
            }
        }

        var queryParams = parseQueryString(url);
        var localBody = body;

        if (typeof localBody === 'string') {
            localBody = parseQueryParams(localBody);
        }

        if (DEBUG) {
            console.group('collectData - before parsing');
            console.log('queryParams', queryParams);
            console.log('localBody', localBody);
            console.groupEnd('collectData - before parsing');
        }

        var clientGetParams = getClientInfoFromData(queryParams);
        var clientPostParams = getClientInfoFromData(localBody);

        if (DEBUG) {
            console.group('collectData - after parsing');
            console.log('GET data', clientGetParams);
            console.log('POST data', clientPostParams);
            console.groupEnd('collectData - after parsing');
        }

        processingData(clientGetParams, clientPostParams);
    }

    function processingData(getData, postData) {
        var email = getData.email.length > 0 ? getData.email : postData.email;
        var phone = getData.phone.length > 0 ? getData.phone : postData.phone;
        var name = getData.name.length > 0 ? getData.name : postData.name;

        if (email.length > 0 || phone.length > 0) {
            console.log(getData, postData);
            console.log('Phone or email is not empty');

            roistatGoal.reach({
                leadName: 'Тестовый лид с сайта',
                name: name,
                phone: phone,
                email: email,
                is_skip_sending: 1
            });
        }
    }
</script>


@yield('scripts')
</html>
