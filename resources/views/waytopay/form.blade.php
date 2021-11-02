<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pago') }}
            {{ Form::text('pago', $waytopay->pago, ['class' => 'form-control' . ($errors->has('pago') ? ' is-invalid' : ''), 'placeholder' => 'Pago']) }}
            {!! $errors->first('pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>