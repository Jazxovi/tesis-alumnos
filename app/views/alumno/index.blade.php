@extends('layout.main')
@section('contenido')
    <div class="container" ng-controller="EstadoController">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label for="">Edad</label>
                    <input type="text" class="form-control" mask="99" ng-model="edad">
                </div>
                <div class="form-group">
                    <label for="">Fecha de nacimiento</label>
                    <input type="text" class="form-control" mask="39/19/9999" ng-model="fecha_nacimiento" placeholder="dd/mm/aaaa">
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <select name="" class="form-control" ng-model="estado.iso">
                        <option ng-repeat="x in estados" value="@{{x.iso}}">@{{x.nombre}}</option>
                    </select>
                </div>
                <div class="form-group" ng-show="estado">
                    <label for="">Municipio</label>
                    <div ng-repeat="x in estados | filter: estado">
                        <select name="" class="form-control">
                            <option ng-repeat="x in x.municipios" value="">@{{ x.nombre }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Localidad</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" class="form-control" placeholder="Ejp: Calle Corona, #15">
                </div>
                <div class="form-group">
                    <label for="">CP</label>
                    <inzput type="text" class="form-control" mask="99999" ng-model="cp">
                </div>
                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" mask="999 999 9999" ng-model="telefono">
                </div>
                <div class="form-group">
                    <button class="btn btn-info">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
