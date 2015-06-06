<html>
    <head>
        <title>Laravel</title>
        <link href='{{ url('/') }}/css/bootstrap.css' rel='stylesheet' type='text/css'>
        <!--<link href='{{ url('/') }}/css/bootstrap-theme.css' rel='stylesheet' type='text/css'>-->
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
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="starter-template">
                <center><h1>@yield('titulo')</h1></center>
            </div>
            <br><br>
            @yield('contenido')
        </div>
    </body>
</html>
