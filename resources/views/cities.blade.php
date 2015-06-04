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
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
