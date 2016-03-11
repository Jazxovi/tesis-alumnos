@extends('layout.main')
@section('contenido')
    <div class="container" ng-controller="EstadoController">
        <div class="row">
        	<h2 class="text-center">
            	Datos del alumno
        	</h2>
            <div class="col-md-8 col-md-offset-2">
            	<table class="table table-bordered table-striped">
            		<tr>
            			<td>Descripción</td>
            			<td>Contenido</td>
            		</tr>
            		<tr>
            			<td>Fecha de nacimiento</td>
            			<td>{{$user->fecha_nacimiento}}</td>
            		</tr>
            		<tr>
            			<td>Estado</td>
            			<td>{{$user->estado}}</td>
            		</tr>
            		<tr>
            			<td>Municipio</td>
            			<td>{{$user->municipio}}</td>
            		</tr>
            		<tr>
            			<td>Localidad</td>
            			<td>{{$user->localidad}}</td>
            		</tr> 
            		<tr>
            			<td>Dirección</td>
            			<td>{{$user->direccion}}</td>
            		</tr>
            		<tr>
            			<td>Colonia</td>
            			<td>{{$user->colonia}}</td>
            		</tr>
            		<tr>
            			<td>Email</td>
            			<td>{{$user->mail}}</td>
            		</tr>
            		<tr>
            			<td>CP</td>
            			<td>{{$user->cp}}</td>
            		</tr>
            		<tr>
            			<td>Telefono</td>
            			<td>{{$user->telefono}}</td>
            		</tr>
            	</table>
            	<div class="form-group">
            		<a href="{{ route('alumno.edit') }}" class="btn btn-warning">Editar</a>
            	</div>
            </div>
        </div>
    </div>
@endsection
