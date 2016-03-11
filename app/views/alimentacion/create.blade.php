@extends('layout.main')
@section('contenido')
<div class="container" ng-app="registro">
    <h2 class="text-center">Aspecto Alimenticio</h2>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            {{ Form::open(array('route' => ['alimentacion.post'])) }}

                <div class="form-group">
                    <label for="ya_consumiste_alimento">Cuando llegas a la escuela ¿ya consumiste alimento?</label>
                    <select name="ya_consumiste_alimento" class="form-control">
                        <option value="siempre">siempre</option>
                        <option value="casi siempre">casi siempre</option>
                        <option value="nunca">nunca</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="consumes_alimentos">Cuantas veces consumes a la semana los siguientes alimentos:</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="carne">Carne:</label>
                        <select name="carne" class="form-control">
                            @for($x=0; $x < 8; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pollo">Pollo:</label>
                        <select name="pollo" class="form-control">
                            @for($x=0; $x < 8; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="huevo">Huevo:</label>
                        <select name="huevo" class="form-control">
                            @for($x=0; $x < 8; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="leche">Leche:</label>
                        <select name="leche" class="form-control">
                            @for($x=0; $x < 8; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="verduras">Verduras:</label>
                        <select name="verduras" class="form-control">
                            @for($x=0; $x < 8; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tortillas">Tortillas:</label>
                        <select name="tortillas" class="form-control">
                            @for($x=0; $x < 8; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pan">Pan:</label>
                        <select name="pan" class="form-control">
                            @for($x=0; $x < 8; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="refresco">Refresco</label>
                        <select name="refresco" class="form-control">
                            @for($x=0; $x < 8; $x++)
                            <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-info" ng-click="verificar">Guardar</button>
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection