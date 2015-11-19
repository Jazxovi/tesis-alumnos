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
    <div class="container" ng-app="registro">
        <h2 class="text-center">Datos Generales de los Padres</h2>
        <div class="row" ng-controller="padres">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                 {{ Form::open(array('route' => ['padres.post', $id])) }}

                    <div class="form-group">
                        <label for="nombres">Nombre del padre:</label>
                        <input type="text" class="form-control" name="nombres_p" required>
                    </div>            

                    <div class="form-group">
                        <label for="esta_vivo">Esta vivo:</label>
                        <input type="text" class="form-control" name="esta_vivo_p" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono_p" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" name="edad_p" required>
                    </div>

                    <div class="form-group">
                        <label for="ocupacion">Ocupacion:</label>
                        <input type="text" class="form-control" name="ocupacion_p" required>
                    </div>            

                    <div class="form-group">
                        <label for="escolaridad">Escolaridad:</label>
                        <input type="text" class="form-control" name="escolaridad_p" required>
                    </div>

                    <div class="form-group">
                        <label for="horario_laboral">Horario laboral:</label>
                        <input type="text" class="form-control" name="horario_laboral_p" required>
                    </div>

                    <div class="form-group">
                        <label for="nombres">Nombre de la madre:</label>
                        <input type="text" class="form-control" name="nombres_m" required>
                    </div>            

                    <div class="form-group">
                        <label for="esta_vivo">Esta viva:</label>
                        <input type="text" class="form-control" name="esta_vivo_m" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono_m">Telefono:</label>
                        <input type="text" class="form-control" name="telefono_m" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" name="edad_m" required>
                    </div>

                    <div class="form-group">
                        <label for="ocupacion">Ocupacion:</label>
                        <input type="text" class="form-control" name="ocupacion_m" required>
                    </div>            

                    <div class="form-group">
                        <label for="escolaridad">Escolaridad:</label>
                        <input type="text" class="form-control" name="escolaridad_m" required>
                    </div>

                    <div class="form-group">
                        <label for="horario_laboral">Horario laboral:</label>
                        <input type="text" class="form-control" name="horario_laboral_m" required>
                    </div>
                        
                    <div class="form-group">
                        <label for="vives_con_tus_padres">¿Vives con tus padres?:</label>
                        <input type="text" class="form-control" name="vives_con_tus_padres" required ng-model="padres" readonly>
                        <button class="btn btn-success espacio" type="button" ng-click="si()" id="hidr">Si</button>
                        <button class="btn btn-success espacio" type="button" ng-click="no()" id="showr">No</button>
                    </div>
                    
                    <section> 
                        <div class="form-group">
                            <label for="con_quien_vives">Si tu respuesta es no ¿con quien vives?</label>
                            <input type="text" class="form-control" name="con_quien_vives">
                        </div>
                    </section>
                    
                    <div class="form-group">
                        <label for="numero_hermanos">Numero de hermanos:</label>
                        <input type="number" class="form-control" name="numero_hermanos" required>
                    </div>

                    <div class="form-group">
                        <label for="que_lugar_ocupas_en_la_familia">Que lugar ocupas en la familia?</label>
                        <input type="text" class="form-control" name="que_lugar_ocupas_en_la_familia" required>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-info" ng-click="verificar">Guardar</button>
                    </div>

                {{Form::close()}}
            </div>
        </div>   
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
    <script src="{{asset('js/controllers/padres.js')}}"></script>
</body>
</html>