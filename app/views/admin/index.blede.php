<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO</title>
   <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/estilos.css')}}">
</head>
<body>
    <div class="container" ng-app="registro">
        <h2></h2>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10"></div>
            
            <ul class="nav nav-pills">
                  <li role="presentation" class="active"><a href="#">Inicio</a></li>
                  <li role="presentation"><a href="#">Alumnos</a></li>
                  <li role="presentation"><a href="#">Cerrar Sesion</a></li>
                  
            </ul>
        </div>
    </div>
    <script src="{{asset('js/angular.js')}}"></script>
    <script src="{{asset('js/appl.js')}}"></script>
    <script src="{{asset('js/controllers/alimentacion.js')}}"></script>
</body>
</html>