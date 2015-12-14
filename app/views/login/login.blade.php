@extends('layout.main')
@section('contenido')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#login" data-toggle="tab">Iniciar Sesión</a></li>
                <li role="presentation"><a href="#registro" data-toggle="tab">Registro</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="login">
                    <div class="row">
                        <br>
                        <div class="col-md-4 col-md-offset-4">
                            {{ Form::open(['route' => 'login.post']) }}
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control input-sm" name="usuario" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control input-sm" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                {{ Form::label('lblRememberme', 'Recordar contraseña') }}
                                {{ Form::checkbox('rememberme', true) }}
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="registro">
                    <div class="row">
                        {{ Form::open(['route' => 'alumno']) }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nombre Completo">Nombre Completo</label>
                                <input type="text" class="form-control input-sm" name="nombres" required>
                            </div>
                            <div class="form-group">
                               <div class="row">
                                   <div class="col-md-6">
                                        <label for="edad">Edad</label>
                                        <select name="edad" class="form-control input-sm">
                                            @for($x = 10; $x <= 22; $x++)
                                                <option value="{{$x}}">{{$x}}</option>
                                            @endfor
                                        </select>
                                   </div>
                                   <div class="col-md-6">
                                       <label for="edad">Grupo</label>
                                        <select name="grupo_id" class="form-control input-sm">
                                            @foreach($grupos as $grupo)
                                                <option value="{{$grupo->id}}">{{$grupo->grupo}}</option>
                                            @endforeach
                                        </select>
                                   </div>
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="text" class="form-control input-sm" name="fecha_nacimiento" required placeholder="11 Junio 1992">
                            </div>

                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" class="form-control input-sm">
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cp">Código Postal</label>
                                <input type="text" class="form-control input-sm" name="cp" size="5" required>
                            </div>

                            <div class="form-group">
                                <label for="municipio">Municipio</label>
                                <input type="text" class="form-control input-sm" name="municipio" required>
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control input-sm" name="direccion" required required placeholder="Calle y Numero o s/n">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="colonia">Colonia</label>
                                <input type="text" class="form-control input-sm" name="colonia" required>
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control input-sm" name="estado" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control input-sm" name="telefono" required>
                            </div>

                            <div class="form-group">
                                <label for="mail">E-mail</label>
                                <input type="email" class="form-control input-sm" name="mail" required>
                            </div>

                            <div class="form-group">
                                <label for="estado_civil">Estado Civil</label>
                                <select name="estado_civil" class="form-control input-sm">
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado">Casado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control input-sm" name="usuario" required>
                            </div>

                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control input-sm" name="password" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-info" ng-click="verificar">Guardar</button>
                        </div>
                        {{Form::close()}}
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>
@endsection