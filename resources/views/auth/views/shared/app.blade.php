<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="stylesheet">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">



    <main class="py-4">
        @yield('content')
    </main>

</div>






<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>


<!-- Vendor JS Files -->
<script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}" defer></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('vendor/chart.js/chart.min.js') }}" defer></script>
<script src="{{ asset('vendor/echarts/echarts.min.js') }}" defer></script>
<script src="{{ asset('vendor/quill/quill.min.js') }}" defer></script>
<script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}" defer></script>
<script src="{{ asset('vendor/tinymce/tinymce.min.js') }}" defer></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}" defer></script>

<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}" defer></script>

</body>

</html>
