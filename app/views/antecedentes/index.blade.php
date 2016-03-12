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
                    <td>La primaria la cursaste en escuela</td>
                    <td>{{$data->la_primaria_la_cursaste_en_escuela}}</td>
                </tr>
                <tr>
                    <td>Promedio de la primaria</td>
                    <td>{{$data->Promedio_primaria}}</td>
                </tr>
                <tr>
                    <td>La secundaria la cursaste en escuela</td>
                    <td>{{$data->la_secundaria_la_cursaste_en_escuela}}</td>
                </tr>
                <tr>
                    <td>Promedio de la secundaria</td>
                    <td>{{$data->promedio_secundaria}}</td>
                </tr>
                <tr>
                    <td>Para ingresar al nivel bachillerato, tu primera opción fue</td>
                    <td>{{$data->para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue}}</td>
                </tr>
                <tr>
                    <td>Porqué elegiste ingresar a nuestro plantel</td>
                    <td>{{$data->porque_elegiste_ingresar_a_nuestro_plantel}}</td>
                </tr>
                <tr>
                    <td>Padeces de alguna enfermedad o discapasidad</td>
                    <td>{{$data->padeces_de_alguna_enfermedad_o_discapasidad}}</td>
                </tr>
                <tr>
                    <td>Cual</td>
                    <td>{{$data->cual}}</td>
                </tr>
                <tr>
                    <td>Que medicamento tomas</td>
                    <td>{{$data->que_medicamento_tomas}}</td>
                </tr>
                <tr>
                    <td>Con que frecuencia</td>
                    <td>{{$data->con_que_frecuencia}}</td>
                </tr>
                <tr>
                    <td>Cuanto tiempo empleas para transladarte de tu domicilio al plantel</td>
                    <td>{{$data->tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel}}</td>
                </tr>
                </table>
            <div class="form-group">
                <a href="{{ route('antecedentes.edit')}}" class="btn btn-warning">Editar</a>
            </div>
    </div>
    </div> 
    @endif 
@endsection