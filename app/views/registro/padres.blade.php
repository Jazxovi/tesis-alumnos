@extends('layout.main')
@section('contenido')
    <div class="container">
        <h2 class="text-center">Datos Generales de los Padres</h2>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                 {{ Form::open(array('route' => ['padres.post'])) }}

                    <div class="form-group">
                        <label for="nombres">Nombre del padre:</label>
                        <input type="text" class="form-control" name="nombres_p" required>
                    </div>            

                    <div class="form-group">
                        <label for="esta_vivo">Esta vivo:</label>
                        <select name="esta_vivo_p" class="form-control" ng-model="padre">
                            <option value="si">si</option>
                            <option value="no">no</option>
                        </select>
                    </div>
                    
                    <div ng-show="padre == 'si'">
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono_p" mask="999 999 9999" ng-model="telefono1">
                        </div>
                        
                        <div class="form-group">
                            <label for="edad">Edad:</label>
                            <select name="edad_p" class="form-control">
                                @for($indice=25; $indice<= 100; $indice++)
                                <option value="{{$indice}}">{{$indice}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ocupacion">Ocupacion:</label>
                            <input type="text" class="form-control" name="ocupacion_p" required>
                        </div>            

                        <div class="form-group">
                            <label for="escolaridad">Escolaridad:</label>
                            <select name="escolaridad_p" class="form-control">
                                <option value="ninguna">Ninguno</option>
                                <option value="primaria">Primaria</option>
                                <option value="secundaria">Secundaria</option>
                                <option value="preparatoria">Preparatoria</option>
                                <option value="Universidad">Universidad</option>
                                <option value="maestria">Maestria</option>
                                <option value="doctorado">Doctorado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="horario_laboral">Horario laboral:</label>
                            <input type="text" class="form-control" name="horario_laboral_p" ng-model="horarioP"
                            mask="19:69am-19:69pm" placeholder="11:10am-09:30pm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nombres">Nombre de la madre:</label>
                        <input type="text" class="form-control" name="nombres_m" required>
                    </div>            

                    <div class="form-group">
                        <label for="esta_vivo">Esta viva:</label>
                        <select name="esta_vivo_m" class="form-control" ng-model="madre">
                            <option value="si">si</option>
                            <option value="no">no</option>
                        </select>
                    </div>

                    <div ng-show="madre == 'si'">
                        <div class="form-group">
                            <label for="telefono_m">Telefono:</label>
                            <input type="text" class="form-control" name="telefono_m" mask="999 999 9999" ng-model="telefono2">
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
                            <select name="escolaridad_m" class="form-control">
                                <option value="ninguna">Ninguno</option>
                                <option value="primaria">Primaria</option>
                                <option value="secundaria">Secundaria</option>
                                <option value="preparatoria">Preparatoria</option>
                                <option value="Universidad">Universidad</option>
                                <option value="maestria">Maestria</option>
                                <option value="doctorado">Doctorado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="horario_laboral">Horario laboral:</label>
                            <input type="text" class="form-control" name="horario_laboral_m" required>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="vives_con_tus_padres">¿Vives con tus padres?:</label>
                        <select name="vives_con_tus_padres" class="form-control" ng-model="padres">
                            <option value="si">si</option>
                            <option value="no">no</option>
                        </select>
                    </div>
                    
                    <section ng-show="padres == 'no'"> 
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
                        <button class="btn btn-info">Guardar</button>
                    </div>

                {{Form::close()}}
            </div>
        </div>   
    </div>
@endsection