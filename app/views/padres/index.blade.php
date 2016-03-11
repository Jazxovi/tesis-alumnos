@extends('layout.main')
@section('contenido')
    <div class="container">
        <h2 class="text-center">
            Datos Generales de los Padres
        </h2>
        @if(count($data) ==0)
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron text-center">
                    <h1>Aun no tienes información de los padres</h1>
                    <a href="{{route('padres.create')}}" class="btn btn-warning">Empezar</a>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a href="{{route('padres.edit')}}" class="label label-primary">Actualizar</a>
                <table class="table table-hover table-bordered table-striped">
                    <tr>
                        <td>Campo</td>
                        <td>Contenido</td>
                    </tr>
                @foreach($data as $d)
                    <tr>
                        <td>Nombre del padre</td>
                        <td>{{$d->nombres_p}}</td>
                    </tr>
                    <tr>
                        <td>Esta vivo</td>
                        <td>{{$d->esta_vivo_p}}</td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td>{{$d->telefono_p}}</td>
                    </tr>
                    <tr>
                        <td>Edad</td>
                        <td>{{$d->edad_p}}</td>
                    </tr>
                    <tr>
                        <td>Ocupacion</td>
                        <td>{{$d->ocupacion_p}}</td>
                    </tr>
                    <tr>
                        <td>Escolaridad</td>
                        <td>{{$d->escolaridad_p}}</td>
                    </tr>
                    <tr>
                        <td>Horario Laboral</td>
                        <td>{{$d->horario_laboral_p}}</td>
                    </tr>
                    <tr>
                        <td>Nombre de la madre</td>
                        <td>{{$d->nombres_m}}</td>
                    </tr>
                    <tr>
                        <td>Esta viva</td>
                        <td>{{$d->esta_vivo_m}}</td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td>{{$d->telefono_m}}</td>
                    </tr>
                    <tr>
                        <td>Edad</td>
                        <td>{{$d->edad_m}}</td>
                    </tr>
                    <tr>
                        <td>Ocupacion</td>
                        <td>{{$d->ocupacion_m}}</td>
                    </tr>
                    <tr>
                        <td>Escolaridad</td>
                        <td>{{$d->escolaridad_m}}</td>
                    </tr>
                    <tr>
                        <td>Horario Laboral</td>
                        <td>{{$d->horario_laboral_m}}</td>
                    </tr>
                    <tr>
                        <td>¿Vives con tus padres?</td>
                        <td>{{$d->vives_con_tus_padres}}</td>
                    </tr>
                    <tr>
                        <td>¿Con quien vives?</td>
                        <td>{{$d->con_quien_vives}}</td>
                    </tr>
                    <tr>
                        <td>Numero de hermanos</td>
                        <td>{{$d->numero_hermanos}}</td>
                    </tr>
                    <tr>
                        <td>Que lugar ocupas en la familia?</td>
                        <td>{{$d->que_lugar_ocupas_en_la_familia}}</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div> 
        @endif 
    </div>
@endsection