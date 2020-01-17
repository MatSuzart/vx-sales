<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title></title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
<body>
    <div class="container">
        <main role="main">
                @yield('body')
        </main>
    </div>
    
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>