<!DOCTYPE html>
<html lang="en" ng-app="registro">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/estilos.css')}}">
    
</head>
<body ng-controller="registro">
    <div class="container" ng-app="registro">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset ('imagenes/cbtis.png')}}" height="100" class="logo">
                
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Lineamiento de Operación del Programa Institucional de Tutorías</h2>
            </div>
            <div class="col-md-3">
                <img src="{{asset ('imagenes/sep.png')}}"  height="100" class="logo">
                
            </div>
        </div>
        <h1 class="text-center">REGISTRO</h1>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                {{ Form::open(array('url' => 'registro')) }}

                    <div class="form-group">
                        <label for="nombres">Nombre del Alumno</label>
                        <input type="text" class="form-control" name="nombres" ng-change="registro()" required ng-model="nombres">
                    </div>             
                    
                    <div class="form-group">
                        <label for="grupo_id">Grupo</label>
                        <select class="form-control" name="grupo_id">
                            @foreach($grupo as $d)
                            <option value="{{$d->id}}">{{$d->grupo}}</option>
                            @endforeach
                        </select>
                    </div>            
                        

                    <div class="form-group">
                        <label for="turno_id">Turno</label>
                         <select class="form-control" name="turno_id">
                           @foreach($turno as $d)
                            <option value="{{$d->id}}">{{$d->turno}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="semestre_id">Semestre</label>
                         <select class="form-control" name="semestre_id">
                            @foreach($semestre as $d)
                            <option value="{{$d->id}}">{{$d->semestre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="area_id">Especialidad</label>
                         <select class="form-control" name="area_id">
                            @foreach($area as $d)
                            <option value="{{$d->id}}">{{$d->carrera}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="@{{tipo}}">Guardar</button>
                    </div>
                
                {{Form::close()}}
            </div>
        </div>   
    </div>
    <script src="{{asset('js/angular.js')}}"></script>
    <script src="{{asset('js/appl.js')}}"></script>
    <script src="{{asset('js/controllers/registro.js')}}"></script>
</body>
</html>