@props(['title'])

@stack('head_start')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! $title  !!}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->

    @vite(['resources/assets/sass/app.scss', 'resources/assets/js/test/script.js'])
</head>
@stack('head_end')
