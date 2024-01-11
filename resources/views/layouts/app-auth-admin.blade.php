<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UniPro App">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />
    <title>ADMIN PANEL | ALPHA CREDIT</title>
    <link rel="stylesheet" href="/backend/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/backend/css/main-rtl.css">
    @livewireStyles
</head>
<body class="authentication" style="background: url(/backend/img/admin2.jpg) no-repeat;background-size: cover">


<div id="loading-wrapper">
    <div class="spinner-border"></div>
    Loading...
</div>

{{$slot}}

<script src="/backend/js/jquery.min.js"></script>
<script src="/backend/js/bootstrap.bundle.min.js"></script>
<script src="/backend/js/modernizr.js"></script>
<script src="/backend/js/moment.js"></script>

<!-- *************
    ************ Vendor Js Files *************
************* -->

<!-- Main Js Required -->
<script src="/backend/js/main.js"></script>
@livewireScripts
</body>
</html>
