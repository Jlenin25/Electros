<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('condiciones') }}
            {{ Form::text('condiciones', $condition->condiciones, ['class' => 'form-control' . ($errors->has('condiciones') ? ' is-invalid' : ''), 'placeholder' => 'Condiciones']) }}
            {!! $errors->first('condiciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>