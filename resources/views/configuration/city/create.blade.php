@extends('template')

@section('contenido')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>NUEVA CIUDAD</strong></div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['url' => '/cities', 'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <label class="col-md-4 control-label">Departamento</label>
                        <div class="col-md-6">
                           {!! Form::select('county_id', $county,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-6">
                            {!! Form::text('name', null,['class'=>'form-control','placeholder'=>'Departamento']) !!}
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