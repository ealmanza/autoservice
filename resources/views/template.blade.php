<html>
    <head>
        <title>Laravel</title>
        <link href='{{ url('/') }}/css/bootstrap.css' rel='stylesheet' type='text/css'>
        <!--<link href='{{ url('/') }}/css/bootstrap-theme.css' rel='stylesheet' type='text/css'>-->
    </head>
    <body>
       <center><h1>@yield('titulo')</h1></center>
       <br><br>
       <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>
