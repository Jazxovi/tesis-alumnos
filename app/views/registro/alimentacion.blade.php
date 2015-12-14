@extends('layout.main')
@section('contenido')
<div class="container" ng-app="registro">
    <h2 class="text-center">Aspecto Alimenticio</h2>
    <div class="row" ng-controller="alimentacion">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            {{ Form::open(array('route' => ['alimentacion.post', $id])) }}

                <div class="form-group">
                    <label for="ya_consumiste_alimento">Cuando llegas a la escuela ¿ya consumiste alimento?</label>
                    <input type="text" class="form-control" name="ya_consumiste_alimento" ng-model="ya_consumiste_alimento" required readonly>
                    <button class="btn btn-success espacio" type="button" ng-click="siempre()">Siempre</button>
                    <button class="btn btn-success espacio" type="button" ng-click="casi_siempre()">Casi siempre</button>
                    <button class="btn btn-success espacio" type="button" ng-click="nunca()">Nunca</button>
                </div>
                <div class="form-group">
                    <label for="consumes_alimentos">Cuantas veces consumes a la semana los siguientes alimentos:</label>
                </div>

                <div class="form-group">
                    <label for="carne">Carne:</label>
                    <input type="number" class="form-control" name="carne" required>
                </div>

                <div class="form-group">
                    <label for="pollo">Pollo:</label>
                    <input type="number" class="form-control" name="pollo" required>
                </div>

                <div class="form-group">
                    <label for="huevo">Huevo:</label>
                    <input type="number" class="form-control" name="huevo" required>
                </div>

                <div class="form-group">
                    <label for="leche">Leche:</label>
                    <input type="number" class="form-control" name="leche" required>
                </div>

                <div class="form-group">
                    <label for="verduras">Verduras:</label>
                    <input type="number" class="form-control" name="verduras" required>
                </div>

                <div class="form-group">
                    <label for="tortillas">Tortillas:</label>
                    <input type="number" class="form-control" name="tortillas" required>
                </div>

                <div class="form-group">
                    <label for="pan">Pan:</label>
                    <input type="number" class="form-control" name="pan" required>
                </div>

                <div class="form-group">
                    <label for="refresco">Refresco</label>
                    <input type="number" class="form-control" name="refresco" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-info" ng-click="verificar">Guardar</button>
                </div>

            {{Form::close()}}
        </div>
    </div>
</div>
@endsection