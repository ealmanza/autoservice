@extends('template')

@section('titulo')
    LISTADO DE CIUDADES
@stop

@section('contenido')
    <table class="table table-hover">
        <thead>
        <tr>
            <th>CODIGO</th>
            <th>CIUDAD</th>
            <th>DEPARTAMENTO</th>
            <th>OPCIONE</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ciudades as $ciudad)
            <tr>
                <td>{!! $ciudad->id !!}</td>
                <td>{!! $ciudad->name !!}</td>
                <td>{!! $ciudad->county->name !!}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ url('/') }}/cities/{!! $ciudad->id !!}/edit" role="button">Editar</a>
                    <a class="btn btn-danger btn-sm" href="{{ url('/') }}/cities/{!! $ciudad->id !!}/edit" role="button">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
