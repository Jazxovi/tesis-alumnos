@extends('layout.main')
@section('contenido')
    <div class="container" ng-app="registro" ng-controller="aspectos_familiares">
        <h2 class="text-center">ASPECTOS FAMILIARES</h2>
        
            {{Form::open(['route' => ['familiares.post']]) }}        
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="en-que_momento_convive_toda_la_familia">En que momento convive toda la familia:</label>
                            <input type="text" class="form-control" name="que_momento_convive_toda_la_familia" ng-model="convive_familia" @{{lectura}} placeholder="Escriba otra alternativa">
                            <button class="btn btn-success espacio" type="button" ng-click="comida()">En la comida</button>
                            <button class="btn btn-success espacio" type="button" ng-click="cena()">En la cena</button>
                            <button class="btn btn-success espacio" type="button" ng-click="tv()">Viendo T.V</button>
                            <button class="btn btn-success espacio" type="button" ng-click="xy()">Otros</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" ng-init="lectura='' ">
                        <div class="form-group">
                            <label for="lugares_que_acudes_con_tu_familia">A que lugares acudes con tu familia para el esparcimiento:</label>
                            <input type="text" class="form-control" name="lugares_que_acudes_con_tu_familia" ng-model="lugares" @{{lectura}} placeholder="Escriba otra alternativa">
                            <button class="btn btn-success espacio" type="button" ng-click="cine()">Cine</button>
                            <button class="btn btn-success espacio" type="button" ng-click="parque()">Parque</button>
                            <button class="btn btn-success espacio" type="button" ng-click="familiares()">Familiares</button>
                            <button class="btn btn-success espacio" type="button" ng-click="otros()">Otros</button>
                        </div>
                        
                        <div class="form-group">
                            <label for="como_es_la_comunicacion_con_tu_familia">Como es la comunicacion con tu familia:</label>
                            <input type="text" class="form-control" name="como_es_la_comunicacion_con_tu_familia" ng-model="comunicacion" required readonly>
                            <button class="btn btn-success espacio" type="button" ng-click="comunicacion_familiar1()">Buena</button>
                            <button class="btn btn-success espacio" type="button" ng-click="comunicacion_familiar2()">Regular</button>
                            <button class="btn btn-success espacio" type="button" ng-click="comunicacion_familiar3()">Mala</button>
                        </div>

                        <div class="form-group">
                            <label for="con_que_miembro_de_tu_familia_existe_mayor_confianza">¿Con que miembro de tu familia existe mayor confianza?</label>
                            <input type="text" class="form-control" name="con_que_miembro_de_tu_familia_existe_mayor_confianza" required>
                        </div> 
                
                        <div class="form-group">
                            <label for="nombres">Nombre</label>
                            <input type="text" class="form-control" name="nombres" required>
                        </div>  
                            
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="number" class="form-control" name="telefono" size="10" required>
                        </div>

                        <div class="form-group">
                            <label for="mail">E-mail</label>
                            <input type="email" class="form-control" name="mail" required>
                        </div>

                        <div class="form-group">
                            <label for="observaciones">Observaciones:</label>
                            <input type="text" class="form-control" name="observaciones" required>
                        </div>     
                        
                        <div class="form-group">
                            <button class="btn btn-info">Guardar</button>
                        </div>
                    </div>
                </div>
        {{Form::close()}}            
    </div>
    <script src="{{asset('js/angular.js')}}"></script>
    <script src="{{asset('js/appl.js')}}"></script>
    <script src="{{asset('js/controllers/aspectos_familiares.js')}}"></script>
@endsection