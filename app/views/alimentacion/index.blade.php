@extends('layout.main')
@section('contenido')
<div class="container" ng-app="registro">
    <h2 class="text-center">Aspecto Alimenticio</h2>
</div>
@if(count($data) ==0)
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron text-center">
            <h1>Aun no tienes información  de aspecto alimenticio</h1>
            <a href="{{route('alimentacion.create')}}" class="btn btn-warning">Empezar</a>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-hover table-bordered table-striped">
            <tr>
                <td>Descripción</td>
                <td>Contenido</td>
            </tr>
            <tr>
                <td>Cuando llegas a la escuela ¿ya consumiste alimentos?</td>
                <td>{{$data->ya_consumiste_alimento}}</td>
            </tr>
            <tr>
                <td>Cuantas veces consumes a la semana carne</td>
                <td>{{$data->carne}}</td>
            </tr>
            <tr>
                <td>Cuantas veces consumes a la semana pollo</td>
                <td>{{$data->pollo}}</td>
            </tr>
            <tr>
                <td>Cuantas veces consumes a la semana huevo</td>
                <td>{{$data->huevo}}</td>
            </tr>
            <tr>
                <td>Cuantas veces consumes a la semana leche</td>
                <td>{{$data->leche}}</td>
            </tr>
            <tr>
                <td>Cuantas veces consumes a la semana verduras</td>
                <td>{{$data->verduras}}</td>
            </tr>
            <tr>
                <td>Cuantas veces consumes a la semana tortillas</td>
                <td>{{$data->tortillas}}</td>
            </tr>
            <tr>
                <td>Cuantas veces consumes a la semana pan</td>
                <td>{{$data->pan}}</td>
            </tr>
            <tr>
                <td>Cuantas veces consumes a la semana refresco</td>
                <td>{{$data->refresco}}</td>
            </tr>
        </table>
        <div class="form-group">
            <a href="{{route('alimentacion.edit')}}" class="btn btn-warning">Actualizar</a>
        </div>
    </div>
</div>
@endif
@endsection