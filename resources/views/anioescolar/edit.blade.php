extends('anioescolar.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
        <h2>{{$anioescolar->nombre_anioescolar}}</h2> 
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
    <form method="post" action="{{ route('anioescolar.update',$anioescolar->id_anioescolar) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="nombreanioescolar"> Año Escolar </label>
             <input type="hidden" class="form-control" id="nombreanioescolar"  name="nombreanioescolar" value="{{anioescolar->nombreanioescolar }}">
                    </div>
        <div class="form-group">
            <label for="fechainicio">Fecha de Inicio:</label>
            <input type="date" class="form-control" id="fechainicio" name="fechainicio" value="{{ $anioescolar->fechainicio }}">
        </div>
        <div class="form-group">
            <label for="fechafin">Fecha de Fin:</label>
            <input type="date" class="form-control" id="fechafin" name="{{ $anioescolar->fechafin }}">
        </div>
        <button type="submit" class="btn btn-default">Actualizar</button>
    </form>
@endsection
