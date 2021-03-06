@extends('layouts.app')

@section('template_title')
    {{ $condition->name ?? 'Show Condition' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Condition</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('conditions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Condiciones:</strong>
                            {{ $condition->condiciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
