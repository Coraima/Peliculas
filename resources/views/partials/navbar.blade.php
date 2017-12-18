<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                Peliculas
            </a>
        </div>
        
        <!--@if( true || Auth::check() )-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li{{ Request::is('peliculas*') && !Request::is('peliculas/create')? ' class=active' : ''}}>
                    <a href="{{url('/peliculas')}}">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        Catálogo
                    </a>
                </li>
                <li{{ Request::is('peliculas/create') ? ' class=active' : ''}}>
                    <a href="{{url('/peliculas/create')}}">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        Nueva pelicula
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('/logout')}}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
      <!-- @endif-->
    </div>
</nav>