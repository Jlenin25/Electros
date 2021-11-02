<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('moneda') }}
            {{ Form::text('moneda', $money->moneda, ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda']) }}
            {!! $errors->first('moneda', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>