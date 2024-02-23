<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap css  -->
    <link
        href="/backend/css/bootstrap.rtl.min.css" rel="stylesheet"/>
    <!-- main css  -->
    <link rel="stylesheet" href="/frontend/css/main.css" />
    <title>Full Stack</title>
</head>
<body>

<livewire:client.header/>

{{$slot}}

<livewire:client.footer/>

<!-- jquery -->
<script src="/backend/js/jquery.min.js"></script>
<!-- Bootstrap js  -->
<script src="/backend/js/bootstrap.bundle.min.js"></script>
<!-- Main js  -->
<script defer src="/frontend/js/main.js"></script>
</body>
</html>
