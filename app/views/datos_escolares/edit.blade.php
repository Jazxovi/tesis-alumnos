@extends('layout.main')
@section('contenido')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center"><span class="label label-default">Datos Escolares</span></h1>
        {{ Form::open(['route' => array('datos.escolares.update', $alumno->id), 'method' => 'PUT']) }}
            <div class="form-group">
                <label for="nombres">Nombre del Alumno</label>
                {{ Form::text('nombres', $alumno->nombres, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                <label for="grupo_id">Grupo</label>
                <select name="grupo_id" class="form-control">
                @foreach(Grupo::where('status', 1)->get() as $d)
                    @if($d->grupo == $alumnoGrupo->grupo)
                    <option value="{{ $d->id }}" selected>{{ $d->grupo }}</option>
                    @else
                    <option value="{{ $d->id }}">{{ $d->grupo }}</option>
                    @endif
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-info">Actualizar</button>
            </div>
        {{Form::close()}}
    </div>
</div>
@endsection