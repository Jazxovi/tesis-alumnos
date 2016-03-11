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
                            {{Form::text('telefono_p', null, ['class' => 'form-control', 'mask' => '999 999 9999',
                            'ng-model' => 'telefono', 'restrict' => 'reject', 'ng-value' => ''])}}
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
                            <div class="form-group">
                                <label for="horario_laboral">Horario laboral:</label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" ng-model="horaMinPapa" placeholder="9:30am" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" ng-model="horaMaxPapa" placeholder="6:30pm" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="horario_laboral_p" 
                                    value="@{{horaMinPapa}} a @{{horaMaxPapa}}" readonly>
                                </div>
                            </div>
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
                            {{Form::text('telefono_m', null, ['class' => 'form-control', 'mask' => '999 999 9999',
                            'ng-model' => 'telefono2', 'restrict' => 'reject', 'ng-value' => ''])}}
                        </div>
                        
                        <div class="form-group">
                            <label for="edad">Edad:</label>
                            <select name="edad_m" class="form-control">
                                @for($indice=25; $indice<= 100; $indice++)
                                <option value="{{$indice}}">{{$indice}}</option>
                                @endfor
                            </select>
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
                            <div class="form-group">
                                <label for="horario_laboral">Horario laboral:</label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" ng-model="horaMinMama" placeholder="9:30am" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" ng-model="horaMaxMama" placeholder="7:30pm" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="horario_laboral_m" 
                                    value="@{{horaMinMama}} a @{{horaMaxMama}}" readonly>
                                </div>
                            </div>
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
                        <select name="numero_hermanos" class="form-control">
                        @for($indice=0; $indice<= 10; $indice++)
                        <option value="{{$indice}}">{{$indice}}</option>
                        @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="que_lugar_ocupas_en_la_familia">Que lugar ocupas en la familia?</label>
                        <select name="que_lugar_ocupas_en_la_familia" class="form-control">
                        @for($indice=0; $indice<= 10; $indice++)
                        <option value="{{$indice}}">{{$indice}}</option>
                        @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-info">Guardar</button>
                    </div>

                {{Form::close()}}
            </div>
        </div>   
    </div>
@endsection