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
        <h2>Datos Socioeconomicos</h2>
        <div class="row" ng-controller="economico">
            <div class="col-md-10">
                {{ Form::open(array('route' => ['economico.post', $id])) }}
                      
                    <div class="form-group">
                        <label for="sosten_economico">Tu principal sosten economico es:</label>
                        <input type="text" class="form-control" name="sosten_economico" required ng-model="sosten_economico" readonly>
                        <button class="btn btn-success espacio" type="button" ng-click="padre()">Padre</button>
                        <button class="btn btn-success espacio" type="button" ng-click="madre()">Madre</button>
                        <button class="btn btn-success espacio" type="button" ng-click="ambos()">Ambos</button>
                        <button class="btn btn-success espacio" type="button" ng-click="familiar()">Familiar</button>
                        <button class="btn btn-success espacio" type="button" ng-click="el_mismo_alumno()">El mismo alumno</button>
                    </div> 
                   
                    <div class="form-group">
                        <label for="tipo_vivienda">Tipo de vivienda</label>
                        <input type="text" class="form-control" name="tipo_vivienda" required ng-model="tipo_vivienda" readonly>
                        <button class="btn btn-success espacio" type="button" ng-click="casa()">Casa</button>
                        <button class="btn btn-success espacio" type="button" ng-click="apartamento()">Apartamento</button>
                        <button class="btn btn-success espacio" type="button" ng-click="vivienda_rural()">Vivienda rural</button>
                    </div>  
                <div class="form-group">
                  <button class="btn btn-info" ng-click="verificar">Guardar</button>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
     <script src="{{asset('js/angular.js')}}"></script>
    <script src="{{asset('js/appl.js')}}"></script>
    <script src="{{asset('js/controllers/economico.js')}}"></script>
</body>
</html>