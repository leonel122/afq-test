<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/app.css')}}">
        <title>Sistema | @yield('title')</title>
    </head>
    <body>
    
             <div class="container">
            @yield('content')
        </div>
    <script src="{{asset('plugins/jquery/js/jquery-3.1.0.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    </body>
</html>