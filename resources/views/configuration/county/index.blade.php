@extends('template')

@section('contenido')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>LISTADO DEPARTAMENTO</strong></div>
                <div class="panel-body">
                    <p>
                        <a class="btn btn-primary " href="{{ route('counties.create') }}" role="button">
                            Nuevo Departamento
                        </a>
                    </p>
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
                                    <a class="btn btn-primary btn-sm" href="{{ route('counties.edit', $departamento->id) }}" role="button">Editar</a>
                                    <a class="btn btn-danger btn-sm" href="" role="button">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p>
                        <a class="btn btn-primary" href="{{ route('counties.create') }}" role="button">
                            Nuevo Departamento
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! $departamentos->render() !!}
        </div>
    </div>
@stop
