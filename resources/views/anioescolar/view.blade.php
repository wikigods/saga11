@extends('anioescolar.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Saga</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('anioescolar') }}"> Atrás</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
        <th>N°:</th> <th>Año Escolar:</th> <th>Fecha de Inicio:</th><th>Fecha de Fin:</th></tr>
        @php
            $i = 0;
        @endphp
        @foreach ($anioescolar as $anioescolar)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $anioescolar->nombreanioescolar}}</td>
                <td>{{ $anioescolar->fechainicio }}</td>
                <td>{{ $anioescolar->fechafin }}</td>
                <td>
            </tr>
        @endforeach
    </table>
@endsection
