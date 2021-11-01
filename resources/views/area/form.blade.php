<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('derivado') }}
            {{ Form::text('derivado', $area->derivado, ['class' => 'form-control' . ($errors->has('derivado') ? ' is-invalid' : ''), 'placeholder' => 'Derivado']) }}
            {!! $errors->first('derivado', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>