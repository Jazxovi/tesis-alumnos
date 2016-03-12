    <div class="container" ng-controller="Socioeconomico">

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
                                        <option value="Abuelo">Abuelo(a)</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </th>
                                <th><input type="text" class="form-control" name="edad"></th>
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
                <table class="table table-bordered table-hover table-striped">
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
                        @if($padre->edad_p != null)
                        <tr>
                            <td>Padre</td>
                            <td>{{$padre->edad_p}}</td>
                            <td>{{$padre->escolaridad_p}}</td>
                            <td>{{$padre->ocupacion_p}}</td>
                            <td>
                                {{Form::open(['route' => ['socioeconomico.update', $padre->id], 'method' => 'PUT'])}}
                                <div ng-show="mostrarP">
                                {{$padre->lugar_trabajo_p}}
                                </div>
                                <div ng-hide="mostrarP">
                                    <input type="text" name="lugar_trabajo_p" class="form-control form-sm">
                                </div>
                            </td>
                            <td>
                                <div ng-show="mostrarP">
                                {{$padre->ingreso_mensual_p}}
                                </div>
                                <div ng-hide="mostrarP">
                                    <input type="text" name="ingreso_mensual_p" class="form-control form-sm">
                                </div>
                            </td>
                            <td>
                                <input type="hidden" name="who" value="1">
                                <button type="@{{typeP}}" class="btn btn-warning btn-xs" ng-click="editP()">
                                    @{{mostrarP? 'Actualizar': 'Guardar'}}
                                </button>
                                {{Form::close()}}
                            </td>
                        </tr>
                        @endif
                        @if($padre->edad_m != null)
                        <tr>
                            <td>Madre</td>
                            <td>{{$padre->edad_m}}</td>
                            <td>{{$padre->escolaridad_m}}</td>
                            <td>{{$padre->ocupacion_m}}</td>
                             <td>
                                {{Form::open(['route' => ['socioeconomico.update', $padre->id], 'method' => 'PUT'])}}
                                <div ng-show="mostrarM">
                                {{$padre->lugar_trabajo_m}}
                                </div>
                                <div ng-hide="mostrarM">
                                    <input type="text" name="lugar_trabajo_m" class="form-control form-sm">
                                </div>
                            </td>
                            <td>
                                <div ng-show="mostrarM">
                                {{$padre->ingreso_mensual_m}}
                                </div>
                                <div ng-hide="mostrarM">
                                    <input type="text" name="ingreso_mensual_m" class="form-control form-sm">
                                </div>
                            </td>
                            <td>
                                <input type="hidden" name="who" value="0">
                                <button type="@{{typeM}}" class="btn btn-warning btn-xs" ng-click="editM()">
                                    @{{mostrarM? 'Actualizar': 'Guardar'}}
                                </button>
                                {{Form::close()}}
                            </td>
                        </tr>
                        @endif
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->parentesco}}</td>
                            <td>{{$d->edad}}</td>
                            <td>{{$d->grado_escolar}}</td>
                            <td>{{$d->ocupacion}}</td>
                            <td>{{$d->lugar_de_trabajo}}</td>
                            <td>{{$d->ingreso_mensual}}</td>
                            <td>
                                {{Form::open(['route' => ['socioeconomico.destroy', $d->id], 'methot' => 'DELETE']) }}
                                    <button class="btn btn-danger btn-xs">Eliminar</button>
                                {{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
