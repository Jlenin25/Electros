<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('expira') }}
            {{ Form::text('expira', $expire->expira, ['class' => 'form-control' . ($errors->has('expira') ? ' is-invalid' : ''), 'placeholder' => 'Expira']) }}
            {!! $errors->first('expira', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>