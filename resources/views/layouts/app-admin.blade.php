<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
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
    <link rel="stylesheet" href="/frontend/css/video-js.css">
    @stack('styles')

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
<script defer src="/frontend/js/video1.min.js"></script>
{{--<script src="/frontend/js/lightbox.js"></script>--}}
<script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

@stack('script')

</body>
</html>
