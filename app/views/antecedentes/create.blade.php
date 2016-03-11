@extends('layout.main')
@section('contenido')
<div class="container" ng-controller="antecedentes">
    <h2 class="text-center">ANTECEDENTES</h2>

    {{ Form::open(array('route' => 'antecedentes.store', 'method' => 'POST')) }}

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="la_primaria_la_cursaste_en_escuela">La primaria la cursaste en escuela:</label>
                    <select name="la_primaria_la_cursaste_en_escuela" class="form-control">
                        <option value="publica">Pública</option>
                        <option value="privada">Privada</option>
                    </select>
                </div>            

                <div class="form-group">
                    <label for="promedio_primaria">Promedio</label>
                    <input type="text" class="form-control" name="promedio_primaria" mask="99.99" ng-model="promedio1" placeholder="09.89">
                </div>

            </div>
            <div class="col-md-3"></div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="la_secundaria_la_cursaste_en_escuela">La secundaria la cursaste en escuela:</label>
                    <select name="la_secundaria_la_cursaste_en_escuela" class="form-control">
                        <option value="publica">Pública</option>
                        <option value="privada">Privada</option>
                    </select>    
                </div>

                <div class="form-group">
                    <label for="promedio_secundaria">Promedio</label>
                    <input type="text" class="form-control" name="promedio_secundaria" mask="99.99" ng-model="promedio2" placeholder="09.89">
                </div>           
            </div>
            <div class="col-md-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue">Para ingresar al nivel bachillerato, tu primera opcion fue:</label>
                    <input type="text" class="form-control" name="para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue" ng-model="tipo_bachillerato"
                    ng-readonly="read_bachillerato" placeholder="Escriba otra alternativa">
                    <button class="btn btn-success espacio" type="button" ng-click="tipoBachillerato('Cobach')">Cobach</button>
                    <button class="btn btn-success espacio" type="button" ng-click="tipoBachillerato('Prepas')">Prepas</button>
                    <button class="btn btn-success espacio" type="button" ng-click="tipoBachillerato('')">Otros</button>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" ng-init="lectura='' ">
                <div class="form-group">
                    <label for="porque_elegiste_ingresar_a_nuestro_plantel">Porque elegiste ingresar a nuestro plantel:</label>
                    <input type="text" class="form-control" name="porque_elegiste_ingresar_a_nuestro_plantel" ng-model="razon" placeholder="Escriba otra alternativa"
                    ng-readonly="read_razon">
                    <button class="btn btn-success espacio" type="button" ng-click="plantel('Amigos')">Amigos</button>
                    <button class="btn btn-success espacio" type="button" ng-click="plantel('Padres')">Padres</button>
                    <button class="btn btn-success espacio" type="button" ng-click="plantel('Carreras')">Carreras</button>
                    <button class="btn btn-success espacio" type="button" ng-click="plantel('Convicción')">Convicción</button>
                    <button class="btn btn-success espacio" type="button" ng-click="plantel('')">Otros</button>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="padeces_de_alguna_enfermedad_o_discapasidad">Padeces de alguna enfermedad o discapacidad:</label>
                    <input type="text" class="form-control" name="padeces_de_alguna_enfermedad_o_discapasidad" ng-model="respuesta" required readonly>
                    <button class="btn btn-success espacio" type="button" id="showr" ng-click="enfermedad('si')">Si</button>
                    <button class="btn btn-success espacio" type="button" id="hidr" ng-click="enfermedad('no')">No</button>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <section>
                    <div class="form-group">
                        <label for="cual">Cual:</label>
                        <input type="text" class="form-control" name="cual">
                    </div>
                    <div class="form-group">
                        <label for="que_medicamento_tomas">Que medicamento tomas:</label>
                        <input type="text" class="form-control" name="que_medicamento_tomas">
                    </div>
                    <div class="form-group">
                        <label for="con_que_frecuencia">Con que frecuencia:</label>
                        <input type="text" class="form-control" name="con_que_frecuencia">
                    </div>
                </section>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel">¿Cuanto tiempo empleas para transladarte de tu domicilio al plantel?:</label>
                    <input type="text" class="form-control" name="tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel"
                    mask="99:69" ng-model="genericTime" placeholder="03:30 hrs">
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row text-center">
            <div class="form-group">
                <button class="btn btn-info">Guardar</button>
            </div>
        </div>
    {{Form::close()}}            
</div>
<script>
    $( "#showr" ).click(function() {
      $( "section" ).first().show( "fast", function showNext() {
        $( this ).next( "section" ).show( "fast", showNext );
      });
    });

    $( "#hidr" ).click(function() {
      $( "section" ).hide( 1000 );
    });
</script>
@endsection
@section('scripts')
@endsection