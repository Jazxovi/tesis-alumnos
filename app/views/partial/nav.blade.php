<nav>
    <div class="navbar navbar-inverse">
        <a ui-sref="home" class="navbar-brand">
            CBTIS #251
        </a>
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapase" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            @if(Auth::user())
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('datos_escolares') ? 'active' : '' }}">
                    <a href="{{route('p')}}">Datos Escolares</a>
                </li>
                <li class="{{ Request::is('registro/datos_del_alumno') ? 'active' : '' }}">
                    <a href="{{route('alumno')}}">Datos del Alumno</a>
                </li>
                <li class="{{ Request::is('registro/antecedentes') ? 'active' : '' }}">
                    <a href="{{route('antecedentes')}}">Antecedentes</a>
                </li>
                <li class="{{ Request::is('registro/padres') ? 'active' : '' }}">
                    <a href="{{route('padres')}}">Datos de los Padres</a>
                </li>
                <li class="{{ Request::is('registro/socioeconomico') ? 'active' : '' }}">
                    <a href="{{route('socioeconomico')}}">Socioeconomicos</a>
                </li>
                <li class="{{ Request::is('registro/alimenticios') ? 'active' : '' }}">
                    <a href="{{route('alimentacion')}}">Aspecto Alimenticio</a>
                </li>
                <li class="{{ Request::is('registro/familiares') ? 'active' : '' }}">
                    <a href="{{route('familiares')}}">Aspectos Familiares</a>
                </li>
                <li class="{{ Request::is('registro/salir') ? 'active' : '' }}">
                    <a href="{{route('salir')}}">Salir</a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>