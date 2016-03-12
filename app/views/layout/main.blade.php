<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tutorias</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/estilos.css')}}">
    <!-- <link rel="stylesheet" href="{{asset ('css/loader.css')}}"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="{{asset('js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/notify.min.js')}}"></script>
    <script src="{{asset('js/pace.js')}}"></script>
    
    <!--Angular-->
    <script src="{{asset('js/angular.min.js')}}"></script>
    <script src="{{asset('js/ngMask.js')}}"></script>
    
    <!--Angular Scripts-->
    <script src="{{asset('app/app.js')}}"></script>
    
    <!--Angular Controllers-->
    <script src="{{asset('app/controllers/estadoController.js')}}"></script>
    <script src="{{asset('app/controllers/antecedentesController.js')}}"></script>
    <script src="{{asset('app/controllers/aspectosFamiliaresController.js')}}"></script>
    <script src="{{asset('app/controllers/padresController.js')}}"></script>
    <script src="{{asset('app/controllers/socioeconomicoController.js')}}"></script>

    @yield('scripts')
</head>
<body ng-app="app">
@include('partial.nav')
@yield('contenido')
</body>
</html>
