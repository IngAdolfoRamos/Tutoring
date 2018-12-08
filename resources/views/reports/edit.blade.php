@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header lead">
                        Editar el reporte de {{ $user->name }}
                    </div>

                    <div class="card-body shadow-lg p-3 bg-white rounded">
                        {!! Form::open(['route' => ['reports.update'], 'method' => 'PUT'])!!}
                            <div class="form-group">
                                {{ Form::label('record', 'Numero de matricula') }}
                                {{ Form::text('record', $user->record, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('name', 'Nombre del alumno') }}
                                {{ Form::text('name', $user->name, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('description', 'Descripcion del problema') }}
                                {{ Form::text('description', $user->description, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::submit('Guardar', ['class' => 'bnt btn-sm btn-primary']) }}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
