<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tutorias</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/estilos.css')}}">
    <script src="{{asset('js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
    <!--Angular-->
    <script src="{{asset('js/angular.min.js')}}"></script>
    <script src="{{asset('js/ngMask.js')}}"></script>
    
    <!--Angular Scripts-->
    <script src="{{asset('app/app.js')}}"></script>
    <script src="{{asset('app/controllers/estadoController.js')}}"></script>
    <script src="{{asset('app/controllers/antecedentesController.js')}}"></script>
    <!--Angular Controllers-->

    @yield('scripts')
</head>
<body ng-app="app">

@include('partial.nav')
@yield('contenido')
</body>
</html>