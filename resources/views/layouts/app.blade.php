<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    @php
        $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
        $class='';
        if ($rout_name!='client.pricing'){
            $class='container';
        }
    @endphp
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Bootstrap css  -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Sweet alert css  -->
    <script src="/backend/js/sweetalert2@11.js"></script>
    <!-- main css  -->
    <link rel="stylesheet" href="/frontend/css/main.css"/>
    @stack('links')
    <title>Full Stack</title>
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
<script src="/frontend/js/bootstrap.bundle.min.js"></script>
<!-- Main js  -->
<script defer src="/frontend/js/main.js"></script>
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
