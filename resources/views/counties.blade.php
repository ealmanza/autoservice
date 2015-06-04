@extends('template')

@section('titulo')
    LISTADO DE DEPARTAMENTOS
@stop

@section('contenido')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRE DEL DEPARTAMENTO</th>
                <th>OPCIONE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departamentos as $departamento)
                <tr>
                    <td>{!! $departamento->id !!}</td>
                    <td>{!! $departamento->name !!}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
