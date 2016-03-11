@extends('layout.main')
@section('contenido')
    <div class="container" ng-app="registro">
        <h2>Datos Socioeconomicos</h2>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                {{Form::open(['route' => ['socioeconomico.post']]) }}

                    <table class="table table-nordered table-hover table-striped">
                        <thead>
                            <tr class="info">
                                <th class="text-center">Parentesco</th>
                                <th class="number-center">Edad</th>
                                <th class="text-center">Grado escolar</th>
                                <th class="text-center">Ocupacion</th>
                                <th class="text-center">Lugar de estudio o trabajo</th>
                                <th class="text-center">Ingreso mensual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <select name="parentesco" id="" class="form-control">
                                        <option value="Padre">Padre</option>
                                        <option value="Madre">Madre</option>
                                        <option value="Hermano">Hermano(a)</option>
                                        <option value="Tio">Tio(a)</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </th>
                                <th><input type="number" class="form-control" name="edad"></th>
                                <th>
                                    <select name="grado_escolar" id="" class="form-control">
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Preparatoria">Preparatoria</option>
                                        <option value="Universidad">Universidad</option>
                                        <option value="Maestria">Maestria</option>
                                        <option value="Doctorado">Doctorado</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                </th>
                                <th><input type="text" class="form-control" name="ocupacion"></th>
                                <th><input type="text" class="form-control" name="lugar_de_trabajo"></th>
                                <th><input type="text" class="form-control" name="ingreso_mensual"></th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                {{Form::close()}}
            </div>
        </div>   
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table table-nordered table-hover table-striped">
                    <thead>
                        <tr class="info">
                            <th class="text-center">Parentesco</th>
                            <th class="number-center">Edad</th>
                            <th class="text-center">Grado escolar</th>
                            <th class="text-center">Ocupacion</th>
                            <th class="text-center">Lugar de estudio o trabajo</th>
                            <th class="text-center">Ingreso mensual</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->parentesco}}</td>
                            <td>{{$d->parentesco}}</td>
                            <td>{{$d->parentesco}}</td>
                            <td>{{$d->parentesco}}</td>
                            <td>{{$d->parentesco}}</td>
                            <td>{{$d->parentesco}}</td>
                            <td>
                                {{Form::open(['route' => ['socioeconomico.destroy', $d->id], 'methot' => 'DELETE']) }}
                                    <button class="btn btn-danger btn-xs">Eliminar</button>
                                {{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="form-group">
                    <a href="{{ URL::action('EconomicoController@index')}}">
                        <button class="btn btn-danger btn-xs">siguiente</button>
                    </a> 
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/angular.js')}}"></script>
    <script src="{{asset('js/appl.js')}}"></script>
    <script src="{{asset('js/controllers/socioeconomico.js')}}"></script>
@endsection