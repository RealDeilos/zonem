<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- bulma --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

        {{-- font awesome --}}
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/styles.css">

        {{-- animated --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    </head>
    <body>

        <div id="app">
                @yield('content')
        </div>

        <script src="/js/app.js" async></script>
    </body>
</html>
