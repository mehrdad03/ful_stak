<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>{{$title ?? 'پنل مدیریت | آلفاکردیت'}}</title>
    <link rel="stylesheet" href="/backend/dark/css/bootstrap.min.css">
    <link rel="stylesheet" href="/backend/dark/fonts/style.css">
    <link rel="stylesheet" href="/backend/dark/css/main-rtl.css">
    <link rel="stylesheet" href="/backend/dark/vendor/search-filter/search-filter.css">
    <link rel="stylesheet" href="/backend/dark/vendor/search-filter/custom-search-filter.css">
    <link rel="stylesheet" href="/backend/dark/vendor/daterange/daterange.css">
    <link rel="stylesheet" href="/persian-fonts/fontiran.css">
    <link rel="stylesheet" href="/persian-fonts/style.css">
    <link rel="stylesheet" href="/backend/css/toastr.min.css">
    <link rel="stylesheet" href="/backend/dark/vendor/wizard/jquery.steps.css"/>
    <link rel="stylesheet" href="/backend/dark/vendor/summernote/summernote-bs4.css"/>
    <link rel="stylesheet" href="/backend/dark/vendor/bs-select/bs-select.css"/>
    <link rel="stylesheet" href="/backend/dark/vendor/dropzone/dropzone.min.css"/>
    <link rel="stylesheet" href="/backend/dark/vendor/input-tags/tagsinput.css"/>
    <link rel="stylesheet" href="/backend/dark/vendor/notify/notify-flat.css">
    <link href="/frontend/css/lightbox.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/backend/css/font-awesome.css">


</head>
<body style="direction: rtl">


<div class="page-wrapper">


    <livewire:admin.menu/>

    <div class="main-container">

        <livewire:admin.header/>

        <div class="content-wrapper-scroll">

            {{$slot}}

        </div>

    </div>

</div>
<!-- Page wrapper end -->


<script src="/backend/dark/js/jquery.min.js"></script>

<script src="/backend/dark/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Megamenu JS -->
<script src="/backend/dark/vendor/megamenu/js/megamenu.js"></script>
<script src="/backend/dark/vendor/megamenu/js/custom.js"></script>

<!-- Slimscroll JS -->
<script src="/backend/dark/vendor/slimscroll/slimscroll.min.js"></script>
<script src="/backend/dark/vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Search Filter JS -->
<script src="/backend/dark/vendor/search-filter/search-filter.js"></script>
<script src="/backend/dark/vendor/search-filter/custom-search-filter.js"></script>

<!-- Date Range JS -->
<script src="/backend/dark/vendor/daterange/daterange.js"></script>
<script src="/backend/dark/vendor/daterange/custom-daterange.js"></script>

<!-- Apex Charts -->
<!-- Apex Charts -->
<script src="/backend/dark/vendor/apex/apexcharts.min.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/salesGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/ordersGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/earningsGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/visitorsGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/customersGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/sparkline.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="/backend/dark/js/modernizr.js"></script>
<script src="/backend/dark/js/moment.js"></script>


<!-- Notify js -->
<script src="/backend/dark/js/jquery.easing.1.3.js"></script>
<script src="/backend/dark/vendor/notify/notify.js"></script>
<script src="/backend/dark/vendor/notify/notify-custom.js"></script>


<script src="/backend/dark/js/main.js"></script>

<script src="/backend/dark/vendor/bs-select/bs-select.min.js"></script>
<script src="/backend/dark/vendor/bs-select/bs-select-custom.js"></script>

<script src="/backend/css/sweetalert2@11.js"></script>
<script src="/backend/js/toastr.min.js"></script>
<script src="/backend/css/sweetalert2@11.js"></script>

<!-- Data Tables -->
<script src="/backend/vendor/datatables/dataTables.min.js"></script>
<script src="/backend/vendor/datatables/dataTables.bootstrap.min.js"></script>

<!-- Custom Data tables -->
<script src="/backend/vendor/datatables/custom/custom-datatables.js"></script>
<script src="/frontend/js/lightbox.js"></script>
@stack('script')

</body>
</html>
