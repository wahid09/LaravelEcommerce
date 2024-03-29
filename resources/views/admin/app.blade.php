<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/font-awesome.min.css') }}"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="app sidebar-mini rtl">
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <main class="app-content">
        @yield('content')
    </main>
    <script src="{{ secure_asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ secure_asset('js/popper.min.js') }}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('js/main.js') }}"></script>
    <script src="{{ secure_asset('js/pace.min.js') }}"></script>
</body>
</html>