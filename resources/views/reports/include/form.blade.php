<div class="form-group">
    {{ Form::label('name', 'Nombre del alumno') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripcion del problema') }}
    {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'bnt btn-sm btn-primary']) }}
</div>
