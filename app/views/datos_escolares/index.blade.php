@extends('layout.main')
@section('contenido')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center"><span class="label label-default">Datos Escolares</span></h1>

            <div class="form-group">
                <label for="nombres">Nombre del Alumno</label>
                {{ Form::text('nombres', $alumno->nombres, ['class' => 'form-control', 'readonly']) }}
            </div>

            <div class="form-group">
                <label for="grupo_id">Grupo</label>
                {{ Form::text('grupo', $alumnoGrupo->grupo, ['class' => 'form-control', 'readonly']) }}

            </div>

            <div class="form-group">
                <label for="turno_id">Turno</label>
                @foreach($alumnoTurno as $d)
                    {{ Form::text('turno_id', $d->turno, ['class' => 'form-control', 'readonly']) }}
                @endforeach
            </div>

            <div class="form-group">
                <label for="semestre_id">Semestre</label>
                @foreach($alumnoSemestre as $d)
                    {{ Form::text('semestre_id', $d->semestre, ['class' => 'form-control', 'readonly']) }}
                @endforeach
            </div>

            <div class="form-group">
                <a href="{{ route('datos.escolares.edit') }}" class="btn btn-warning">Editar</a>
            </div>
    </div>
</div>
@endsection