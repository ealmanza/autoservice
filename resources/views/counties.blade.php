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
                        <a class="btn btn-primary btn-sm" href="{{ url('/') }}/counties/{!! $departamento->id !!}/edit" role="button">Editar</a>
                        <a class="btn btn-danger btn-sm" href="{{ url('/') }}/counties/{!! $departamento->id !!}/edit" role="button">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $departamentos->render() !!}
@stop
