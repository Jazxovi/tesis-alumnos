@extends('layout.main')
@section('contenido')
    <h2 class="text-center">
        Socioecónomico 
    </h2>
    @if(count($padre) == 0)
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center">
                <h1>Primero debes llenar la pestaña datos de los padres</h1>
            </div>
        </div>
    </div>
    @else
    @include('socioeconomicos.create')  
    @endif 
@endsection