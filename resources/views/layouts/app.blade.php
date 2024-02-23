<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>

    @php
        $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
    @endphp
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Bootstrap css  -->
    <link
        href="/backend/css/bootstrap.rtl.min.css" rel="stylesheet"/>
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

<main class="container my-5">
    {{$slot}}
</main>

@if($rout_name!='auth.client')
    <livewire:client.footer/>
@endif

<!-- jquery -->
<script src="/backend/js/jquery.min.js"></script>
<!-- Bootstrap js  -->
<script src="/backend/js/bootstrap.bundle.min.js"></script>
<!-- Main js  -->
<script defer src="/frontend/js/main.js"></script>

@stack('scripts')

</body>
</html>
