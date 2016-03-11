@extends('layout.main')
@section('contenido')
    <h2 class="text-center">
        Antecedentes
    </h2>
    @if(count($data) == 0)
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center">
                <h1>Aun no tienes registro de antecedentes</h1>
                <a href="{{route('antecedentes.create')}}" class="btn btn-warning">Empezar</a>
            </div>
        </div>
    </div>
    @else
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>Pregunta</td>
                    <td>Respuesta</td>
                </tr>
                <tr>
                    <td>la_primaria_la_cursaste_en_escuela</td>
                    <td>{{$data->la_primaria_la_cursaste_en_escuela}}</td>
                </tr>
                <tr>
                    <td>promedio_primaria</td>
                    <td>{{$data->Promedio_primaria}}</td>
                </tr>
                <tr>
                    <td>la_secundaria_la_cursaste_en_escuela</td>
                    <td>{{$data->la_secundaria_la_cursaste_en_escuela}}</td>
                </tr>
                <tr>
                    <td>promedio_secundaria</td>
                    <td>{{$data->promedio_secundaria}}</td>
                </tr>
                <tr>
                    <td>para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue</td>
                    <td>{{$data->para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue}}</td>
                </tr>
                <tr>
                    <td>porque_elegiste_ingresar_a_nuestro_plantel</td>
                    <td>{{$data->porque_elegiste_ingresar_a_nuestro_plantel}}</td>
                </tr>
                <tr>
                    <td>padeces_de_alguna_enfermedad_o_discapasidad</td>
                    <td>{{$data->padeces_de_alguna_enfermedad_o_discapasidad}}</td>
                </tr>
                <tr>
                    <td>cual</td>
                    <td>{{$data->cual}}</td>
                </tr>
                <tr>
                    <td>que_medicamento_tomas</td>
                    <td>{{$data->que_medicamento_tomas}}</td>
                </tr>
                <tr>
                    <td>con_que_frecuencia</td>
                    <td>{{$data->con_que_frecuencia}}</td>
                </tr>
                <tr>
                    <td>tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel</td>
                    <td>{{$data->tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel}}</td>
                </tr>
                <tr>
                    <td>con_que_frecuencia</td>
                    <td>{{$data->con_que_frecuencia}}</td>
                </tr>
            </table>
            <div class="form-group">
                <a href="" class="btn btn-warning">Editar</a>
            </div>
    </div>
    </div> 
    @endif 
@endsection