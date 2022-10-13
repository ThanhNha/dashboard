@props(['title'])

@stack('head_start')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! $title  !!}</title>

    <!-- Scripts -->

    @vite(['resources/assets/css/auth/login.css', 'resources/assets/js/auth/login.js'])


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
</head>
@stack('head_end')
