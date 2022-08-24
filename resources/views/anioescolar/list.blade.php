@extends('anioescolar.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Año Escolar</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('anioescolar.create') }}">Añadir</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>N°</th>
            <th>Año Escolar</th>
            <th>Fecha de Inicio</th>
            <th>Finalización</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($anioescolar as $anioescolar)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $anioescolar->nombreanioescolar }}</td>
                <td>{{ $anioescolar->fechainicio }}</td>
                <td>{{ $anioescolar->fechafin }}</td>      
                <td>
                    <form action="{{ route('anioescolar.destroy',$anioescolar->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('anioescolar.show',$anioescolar->id) }}">Ver</a>
                        <a class="btn btn-primary" href="{{ route('anioescolar.edit',$anioescolar->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
