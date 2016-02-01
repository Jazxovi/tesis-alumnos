<nav>
    <div class="navbar navbar-inverse">
        <a ui-sref="home" class="navbar-brand">#</a>
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapase" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('p')}}">Datos Escolares</a></li>
                <li><a href="{{route('alumno')}}">Datos del Alumno</a></li>
                <li><a href="{{route('antecedentes')}}">Antecedentes</a></li>
                <li><a href="{{route('padres')}}">Datos de los Padres</a></li>
                <li><a href="{{route('socioeconomico')}}">Socioeconomicos</a></li>
                <li><a href="{{route('alimentacion')}}">Aspecto Alimenticio</a></li>
                <li><a href="{{route('familiares')}}">Aspectos Familiares</a></li>
                <li><a href="{{route('salir')}}">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>