<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/estilos.css')}}">
    <script src="{{asset('js/vendor/jquery-2.1.1.min.js')}}"></script>
</head>
<body>
    <div class="container" ng-app="registro" ng-controller="antecedentes">
        <h2 class="text-center">ANTECEDENTES</h2>
        
        {{ Form::open(array('route' => ['antecedentes.post', $id])) }}

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="la_primaria_la_cursaste_en_escuela">La primaria la cursaste en escuela:</label>
                        <input type="text" class="form-control" name="la_primaria_la_cursaste_en_escuela" ng-model="tipo_escuela" required readonly>
                        <button class="btn btn-success espacio" type="button" ng-click="publica()">Publica</button>
                        <button class="btn btn-success espacio" type="button" ng-click="particular()">Particular</button>
                    </div>            

                    <div class="form-group">
                        <label for="promedio_primaria">Promedio</label>
                        <input type="number" class="form-control" name="promedio_primaria" required>
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
                        <input type="text" class="form-control" name="la_secundaria_la_cursaste_en_escuela" ng-model="tipo_escuela2" required readonly>

                        <button class="btn btn-success espacio" type="button" ng-click="publica2()">Publica</button>
                        <button class="btn btn-success espacio" type="button" ng-click="particular2()">Particular</button>
                    </div>

                    <div class="form-group">
                        <label for="promedio_secundaria">Promedio</label>
                        <input type="number" class="form-control" name="promedio_secundaria" required>
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
                        <input type="text" class="form-control" name="para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue" ng-model="tipo_bachillerato" @{{lectura}} placeholder="Escriba otra alternativa">
                        <button class="btn btn-success espacio" type="button" ng-click="bachillerato_cobach()">Cobach</button>
                        <button class="btn btn-success espacio" type="button" ng-click="bachillerato_prepas()">Prepas</button>
                        <button class="btn btn-success espacio" type="button" ng-click="bachillerato_otros()">Otros</button>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" ng-init="lectura='' ">
                    <div class="form-group">
                        <label for="porque_elegiste_ingresar_a_nuestro_plantel">Porque elegiste ingresar a nuestro plantel:</label>
                        <input type="text" class="form-control" name="porque_elegiste_ingresar_a_nuestro_plantel" ng-model="plantel" @{{lectura}} placeholder="Escriba otra alternativa">
                        <button class="btn btn-success espacio" type="button" ng-click="plantel_amigos()">Amigos</button>
                        <button class="btn btn-success espacio" type="button" ng-click="plantel_padres()">Padres</button>
                        <button class="btn btn-success espacio" type="button" ng-click="plantel_carreras()">Carreras</button>
                        <button class="btn btn-success espacio" type="button" ng-click="plantel_conviccion()">Conviccion</button>
                        <button class="btn btn-success espacio" type="button" ng-click="plantel_otros()">Otros</button>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="padeces_de_alguna_enfermedad_o_discapasidad">Padeces de alguna enfermedad o discapacidad:</label>
                        <input type="text" class="form-control" name="padeces_de_alguna_enfermedad_o_discapasidad" ng-model="padeces_de_alguna_enfermedad_o_discapasidad" required readonly>
                        <button class="btn btn-success espacio" type="button" ng-click="si()" id="showr">Si</button>
                        <button class="btn btn-success espacio" type="button" ng-click="no()" id="hidr">No</button>
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
                        <input type="text" class="form-control" name="tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel" required>
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
    <script src="{{asset('js/angular.js')}}"></script>
    <script src="{{asset('js/appl.js')}}"></script>
    <script src="{{asset('js/controllers/antecedentes.js')}}"></script>
</body>
</html>