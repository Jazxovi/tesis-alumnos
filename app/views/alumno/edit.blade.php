@extends('layout.main')
@section('contenido')
    <div class="container" ng-controller="EstadoController">
        <div ng-init="cp = '{{$user->cp}}' "></div>
        <div ng-init="telefono = '{{$user->telefono}}' "></div>
        <div ng-init="est = '{{$user->estado}}' "></div>
        <div ng-init="estados.iso = '{{$user->estado}}' "></div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{Form::open(['route' => 'alumno.update', 'method' => 'PUT'])}}
                <div class="form-group">
                    <label for="">Fecha de nacimiento</label>
                    {{Form::text('fecha_nacimiento', $user->fecha_nacimiento, ['class' => 'form-control', 'id' => 'date'])}}
                </div>
                <div class="from-group">
                    <button class="btn btn-warning btn-sm" type="button" ng-click="editEstado()">Editar Estado</button>
                </div>
                <div ng-hide="edit">
                    <div class="form-group">
                        <label for="">Estado {{$user->estado}}</label>
                        <select name="estado" class="form-control" ng-model="estado.iso" ng-change="cambiouno(estado.iso)">
                            <option ng-repeat="x in estados" value="@{{x.iso}}">@{{x.nombre}}</option>
                        </select>
                    </div>
                    <div class="form-group" ng-show="estado">
                        <label for="">Municipio {{$user->municipio}}</label>
                        <div ng-repeat="x in estados | filter: estado">
                            <select name="municipio" class="form-control" ng-model="municipio.nombre" 
                            ng-change="cambiodos(municipio.nombre)">
                                <option ng-repeat="x in x.municipios" value="@{{ x.nombre }}">@{{ x.nombre }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div ng-show="edit">
                    <div class="form-group">
                        <label for="">Estado</label>
                        <input type="text" name="estado" class="form-control" value="{{$user->estado}}" id="estado2" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Municipio {{$user->municipio}}</label>
                        <input type="text" name="municipio" class="form-control" id="municipio2" value="{{$user->municipio}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Localidad</label>
                    {{Form::text('localidad', $user->localidad, ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    <label for="">Direccion</label>
                    {{Form::text('direccion', $user->direccion, ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    <label for="">Colonia</label>
                    {{Form::text('colonia', $user->colonia, ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    <label for="">CP</label>
                     {{Form::text('cp', $user->cp, ['class' => 'form-control', 'mask' => '99999',
                     'ng-model' => 'cp'])}}
                </div>
                <div class="form-group">
                    <label for="">Telefono</label>
                    {{Form::text('telefono', null, ['class' => 'form-control', 'mask' => '999 999 9999',
                     'ng-model' => 'telefono', 'restrict' => 'reject'])}}
                </div>
                <div class="form-group">
                    <button class="btn btn-info">Guardar</button>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#date").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "1900:2013"
            });
        });
    </script>
@endsection
