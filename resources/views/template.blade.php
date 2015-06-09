<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AutoService</title>
        <link href='{{ url('/') }}/css/bootstrap.css' rel='stylesheet' type='text/css'>
        <link href='{{ url('/') }}/css/bootstrap-theme.css' rel='stylesheet' type='text/css'>
        <link href='{{ url('/') }}/css/theme.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AutoService</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{!! url('/') !!}">Inicio</a></li>
                        <li><a href="{!! url('/') !!}/counties">Departamentos</a></li>
                        <li><a href="{!! url('/') !!}/cities">Ciudades</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container-fluid">
            @yield('contenido')
        </div>
        <script src="{{ url('/') }}/js/jquery-1.11.3.min.js"></script>
        <script src="{{ url('/') }}/js/bootstrap.min.js"></script>
    </body>
</html>
