<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'MaMaKuBa') - {{ setting('site_name', '妈妈们的暖心地') }}</title>
    <meta name="description" content="@yield('description', setting('seo_description', 'MaMaKuBa 妈妈们的社区。'))" />
    <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'MaMaKuBa,社区,论坛,心理论坛'))" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app" class="{{ route_class() }}-page">
       
        @include('layouts._header')
        
        <div class="container">
            @include('layouts._message')

            @yield('content')

        </div>
    </div>


    @if (app()->isLocal())
        @include('sudosu::user-selector')
    @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>