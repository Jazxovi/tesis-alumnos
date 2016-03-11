@extends('layout.main')
@section('contenido')
<div class="container" ng-app="registro">
    <h2 class="text-center">Aspectos Familiares</h2>
</div>
@if(count($data) ==0)
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron text-center">
            <h1>Aun no tienes información de aspectos familiares</h1>
            <a href="{{route('familiares.create')}}" class="btn btn-warning">Empezar</a>
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
                <td>En que momento convive toda la familia</td>
                <td>{{$data->que_momento_convive_toda_la_familia}}</td>
            </tr>
            <tr>
                <td>A que lugares acudes con tu familia para el esparcimiento</td>
                <td>{{$data->lugares_que_acudes_con_tu_familia}}</td>
            </tr>
            <tr>
                <td>Como es la comunicacion con tu familia</td>
                <td>{{$data->como_es_la_comunicacion_con_tu_familia}}</td>
            </tr>
            <tr>
                <td>¿Con que miembro de tu familia existe mayor confianza?</td>
                <td>{{$data->con_que_miembro_de_tu_familia_existe_mayor_confianza}}</td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>{{$data->nombres}}</td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td>{{$data->telefono}}</td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>{{$data->mail}}</td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td>{{$data->observaciones}}</td>
            </tr>
        </table>
        <div class="form-group">
            <a href="{{route('familiares.edit')}}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>
@endif
@endsection