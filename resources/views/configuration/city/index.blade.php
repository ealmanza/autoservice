@extends('template')

@section('contenido')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">LISTADO DE CIUDADES</div>
                <div class="panel-body">
                    <p>
                        <a class="btn btn-primary " href="{{ route('cities.create') }}" role="button">
                            Nueva Ciudad
                        </a>
                    </p>
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
                                    <a class="btn btn-primary btn-sm" href="{{ route('cities.edit', $ciudad->id) }}" role="button">Editar</a>
                                    <a class="btn btn-danger btn-sm" href="" role="button">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p>
                        <a class="btn btn-primary " href="{{ route('cities.create') }}" role="button">
                            Nueva Ciudad
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! $ciudades->render() !!}
        </div>
    </div>
@stop
