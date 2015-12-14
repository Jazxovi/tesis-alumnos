@extends('layout.main')
@section('contenido')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center"><span class="label label-default">Datos Escolares</span></h1>
        {{ Form::open(['route' => 'registro.store']) }}
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
                <button class="btn btn-info" type="@{{tipo}}">Guardar</button>
            </div>
        {{Form::close()}}
    </div>
</div>
@endsection