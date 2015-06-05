@extends('template')

@section('titulo')
    CREAR UN NUEVO DEPARTAMENTO
@stop

@section('contenido')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open(['url' => '/counties', 'class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                {!! Form::text('name', null,['class'=>'form-control','placeholder'=>'Departamento','required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary btn-sm']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop