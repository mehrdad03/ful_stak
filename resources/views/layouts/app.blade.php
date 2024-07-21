<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MPFS4KVZ');</script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-51VV84SGR7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-51VV84SGR7');
    </script>
    <script>
        !function (t, e, n) {
            t.yektanetAnalyticsObject = n, t[n] = t[n] || function () {
                t[n].q.push(arguments)
            }, t[n].q = t[n].q || [];
            var a = new Date, r = a.getFullYear().toString() + "0" + a.getMonth() + "0" + a.getDate() + "0" + a.getHours(),
                c = e.getElementsByTagName("script")[0], s = e.createElement("script");
            s.id = "ua-script-nId1nPDl"; s.dataset.analyticsobject = n;
            s.async = 1; s.type = "text/javascript";
            s.src = "https://cdn.yektanet.com/rg_woebegone/scripts_v3/nId1nPDl/rg.complete.js?v=" + r, c.parentNode.insertBefore(s, c)
        }(window, document, "yektanet");
    </script>
    @php
        $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
        $class='';
        if ($rout_name!='client.pricing'){
            $class='container';
        }
    @endphp
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="#23bf65">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {!! SEO::generate() !!}

    <!-- Swiper css  -->
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css"/>
    <!-- Bootstrap css  -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Sweet alert css  -->
    <script src="/backend/js/sweetalert2@11.js"></script>
    <!-- main css  -->
    <link rel="stylesheet" href="/backend/css/font-awesome.css">
    <link rel="stylesheet" href="/frontend/css/main.css"/>

    @stack('links')
</head>
<body>

@if($rout_name!='auth.client')
    <livewire:client.header/>
@endif

@if($rout_name=='auth.client')
    <canvas id="matrix"></canvas>
@endif

<main class="{{$class}}">
    {{$slot}}
</main>

@if($rout_name!='auth.client')
    <livewire:client.footer/>
@endif

<!-- jquery -->
<script src="/backend/js/jquery.min.js"></script>
<!-- Bootstrap js  -->
<script src="/frontend/js/bootstrap.min.js"></script>
<!-- Main js  -->
<script defer src="/frontend/js/main.js"></script>
<!-- Swiper  js  -->
<script src="/frontend/js/swiper-bundle.min.js"></script>
<!-- Sweet alert js  -->
<script src="/backend/js/sweetalert2@11.js"></script>

<script type="text/javascript">
    ["keydown", "touchmove", "touchstart", "mouseover"].forEach(function (v) {
        window.addEventListener(v, function () {
            if (!window.isGoftinoAdded) {
                window.isGoftinoAdded = 1;
                var i = "ZXyTzX", d = document, g = d.createElement("script"),
                    s = "https://www.goftino.com/widget/" + i, l = localStorage.getItem("goftino_" + i);
                g.type = "text/javascript", g.async = !0, g.src = l ? s + "?o=" + l : s;
                d.getElementsByTagName("head")[0].appendChild(g);
            }
        })
    });
</script>

@stack('scripts')

</body>
</html>
