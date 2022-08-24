@extends('anioescolar.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Agregar</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('anioescolar') }}"> Atrás</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Lo Sentimos!</strong> No pudimos mostrar la página solicitada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('anioescolar.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <h2>{{$liceo->nombre_liceo}}</h2> 
        </div>
        <div class="form-group">
        <label for="txtFirstName">Año Escolar:</label>
            <input type='text' class="form-control" id="nombreanioescolar" name="nombreanioescolar" value="{{anioescolar->nombreanioescolar }}">
        </div>
        <div class="form-group">
            <label for="txtFirstName">Fecha de Inicio:</label>
            <input type="date" class="form-control" id="fechainicio" name="fechainicio">
        </div>
        <div class="form-group">
            <label for="txtLastName">Fecha Fin:</label>
            <input type="date" class="form-control" id="fechafin" name="fechafin">
        </div>
        <div class="form-group">
        
            <input type="hidden" class="form-control" id="liceo_id" name="liceo_id" value="{{ $liceo->id_liceo }}">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
@endsection
