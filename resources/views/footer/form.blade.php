<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('piepagina') }}
            {{ Form::text('piepagina', $footer->piepagina, ['class' => 'form-control' . ($errors->has('piepagina') ? ' is-invalid' : ''), 'placeholder' => 'Piepagina']) }}
            {!! $errors->first('piepagina', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>