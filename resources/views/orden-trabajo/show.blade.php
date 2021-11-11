@extends('layouts.app')

@section('template_title')
    {{ $ordenTrabajo->name ?? 'Show Orden Trabajo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Orden Trabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orden-trabajos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Client:</strong>
                            {{ $ordenTrabajo->id_client }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $ordenTrabajo->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Procesado:</strong>
                            {{ $ordenTrabajo->procesado }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ordenTrabajo->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Deliverie:</strong>
                            {{ $ordenTrabajo->id_deliverie }}
                        </div>
                        <div class="form-group">
                            <strong>Creado:</strong>
                            {{ $ordenTrabajo->creado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
