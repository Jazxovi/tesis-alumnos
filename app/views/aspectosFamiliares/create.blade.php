@extends('layout.main')
@section('contenido')
    <div class="container" ng-controller="AspectosFamiliares">
        <h2 class="text-center">ASPECTOS FAMILIARES</h2>
        
            {{Form::open(['route' => ['familiares.post']]) }}        
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="que_momento_convive_toda_la_familia">En que momento convive toda la familia:</label>
                            <input type="text" class="form-control" name="que_momento_convive_toda_la_familia" ng-model="convive_familia"
                            ng-readonly="read_convivencia" placeholder="Escriba otra alternativa">
                            <p class="btn btn-success espacio" ng-click="convivencia('En la comida')">En la comida</p>
                            <p class="btn btn-success espacio" ng-click="convivencia('En la cena')">En la cena</p>
                            <p class="btn btn-success espacio" ng-click="convivencia('Viendo T.V.')">Viendo T.V</p>
                            <p class="btn btn-success espacio" ng-click="convivencia('')">Otros</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" ng-init="lectura='' ">
                        <div class="form-group">
                            <label for="lugares_que_acudes_con_tu_familia">A que lugares acudes con tu familia para el esparcimiento:</label>
                            <input type="text" class="form-control" name="lugares_que_acudes_con_tu_familia" ng-model="lugares" 
                            ng-readonly="read_esparcimiento" placeholder="Escriba otra alternativa">
                            <p class="btn btn-success espacio" ng-click="esparcimiento('Cine')">Cine</p>
                            <p class="btn btn-success espacio" ng-click="esparcimiento('Parque')">Parque</p>
                            <p class="btn btn-success espacio" ng-click="esparcimiento('Lugares familiares')">Lugares familiares</p>
                            <p class="btn btn-success espacio" ng-click="esparcimiento('')">Otros</p>
                        </div>
                        
                        <div class="form-group">
                            <label for="como_es_la_comunicacion_con_tu_familia">Como es la comunicacion con tu familia:</label>
                            <input type="text" class="form-control" name="como_es_la_comunicacion_con_tu_familia" ng-model="tipo_comunicacion"
                            ng-readonly="read_comunicacion">
                            <button class="btn btn-success espacio" type="button" ng-click="comunicacion('Buena')">Buena</button>
                            <button class="btn btn-success espacio" type="button" ng-click="comunicacion('Regular')">Regular</button>
                            <button class="btn btn-success espacio" type="button" ng-click="comunicacion('Mala')">Mala</button>
                        </div>

                        <div class="form-group">
                            <label for="con_que_miembro_de_tu_familia_existe_mayor_confianza">¿Con que miembro de tu familia existe mayor confianza?</label>
                            <select name="con_que_miembro_de_tu_familia_existe_mayor_confianza" class="form-control">
                                <option value="Padre">Padre</option>
                                <option value="Madre">Madre</option>
                                <option value="Hermano(@)">Hermano(@)</option>
                                <option value="Tio(@)">Tio(@)</option>
                                <option value="Abuelo(@)">Abuelo(@)</option>
                            </select>
                        </div> 
                
                        <div class="form-group">
                            <label for="nombres">Nombre</label>
                            <input type="text" class="form-control" name="nombres">
                        </div>  
                            
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            {{Form::text('telefono', null, ['class' => 'form-control', 'ng-model' => 'telefono', 
                            'mask' => '999 999 9999', 'restrict' => 'reject'])}}
                        </div>

                        <div class="form-group">
                            <label for="mail">E-mail</label>
                            {{Form::text('mail', null, ['class' => 'form-control'])}}
                        </div>

                        <div class="form-group">
                            <label for="observaciones">Observaciones:</label>
                            {{Form::text('observaciones', null, ['class' => 'form-control'])}}
                        </div>     
                        
                        <div class="form-group">
                            @foreach ($errors->all() as $message)
                                <script>
                                    $.notify("{{$message}}", "error");
                                </script>
                            @endforeach
                            <button class="btn btn-info">Guardar</button>
                        </div>
                    </div>
                </div>
        {{Form::close()}}            
    </div>
@endsection