<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('entrega') }}
            {{ Form::text('entrega', $delivery->entrega, ['class' => 'form-control' . ($errors->has('entrega') ? ' is-invalid' : ''), 'placeholder' => 'Entrega']) }}
            {!! $errors->first('entrega', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>