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
        <h2 class="text-center">Datos Generales del Alumno</h2>
        <div class="row" ng-controller="formulario-registro">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                    @foreach($x as $y)
                    <p class="oculta">{{$id = $y->id}}</p>
                    @endforeach
                {{ Form::open(array('route' => ['registro.update', $id], 'method' => 'PUT')) }}


                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control" name="edad" required>
                    </div>

                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" name="fecha_nacimiento" required placeholder="11 Junio 1992">
                    </div>

                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <input type="text" class="form-control" name="sexo" ng-model="sexo" required readonly>
                        <button class="btn btn-success espacio" type="button" ng-click="m()">Masculino</button>
                        <button class="btn btn-success espacio" type="button" ng-click="f()">Femenino</button>
                    </div>

                    <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control" name="municipio" required>
                    </div>            

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" required>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" name="direccion" required>
                    </div>

                    <div class="form-group">
                        <label for="colonia">Colonia</label>
                        <input type="text" class="form-control" name="colonia" required>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado" required>
                    </div>            

                    <div class="form-group">
                        <label for="cp">Codigo postal</label>
                        <input type="number" class="form-control" name="cp" size="5" required>
                    </div>

                    <div class="form-group">
                        <label for="mail">E-mail</label>
                        <input type="email" class="form-control" name="mail" required>
                    </div>

                    <div class="form-group">
                        <label for="estado_civil">Estado civil</label>
                        <input type="text" class="form-control" name="estado_civil" required ng-model="estado" readonly>
                        <button class="btn btn-success espacio" type="button" ng-click="soltero()">Soltero</button>
                        <button class="btn btn-success espacio" type="button" ng-click="casado()">Casado</button>
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
    <script src="{{asset('js/controllers/formulario_registro.js')}}"></script>
</body>
</html>